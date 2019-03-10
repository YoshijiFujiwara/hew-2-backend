<?php

namespace App\Console\Commands;

use App\Model\Session;
use App\Model\Shop;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MakeShopInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:shopinfo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'セッション（イベント）の店IDから、shopsテーブルにデータを作成する';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // shop_idが格納されているセッションのうち、親レコードに、店情報を持たないものを取得する
        $shopIds = Session::doesnthave('shop')->whereNotNull('shop_id')->get()->groupBy('shop_id')->toArray();

        foreach ($shopIds as $shopId => $datas) {
            //request先
            $url = config('apikey.RECRUIT_WEB_API_URL');
            $url .= '&id=' . $shopId;

            // インスタンス作成
            $client = new Client();

            try {
                // リクエスト送信
                $response = $client->request('GET', $url);
                $result = json_decode($response->getBody());
                $shopInfo = $result->results->shop[0];

                if (!empty($shopInfo)) {
                    Shop::create([
                        'shop_id' => $shopId,
                        'name' => $shopInfo->name,
                        'lng' => $shopInfo->lng,
                        'lat' => $shopInfo->lat,
                        'genre_id' => $shopInfo->genre->code,
                        'genre_name' => $shopInfo->genre->name,
                        'large_area_name' => $shopInfo->large_area->name,
                        'middle_area_name' => $shopInfo->middle_area->name,
                        'small_area_name' => $shopInfo->small_area->name,
                    ]);
                }

            } catch (ClientException $exception) {
                Log::error('guzzle http error');
            }
        }
    }
}
