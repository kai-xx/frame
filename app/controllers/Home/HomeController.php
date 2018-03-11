<?php
class HomeController extends BaseController
{
    public function home()
    {
        Good::first();
        $this->mail = Mail::to(['zhangkaifunny@gmail.com', '694269416@qq.com'])

            ->from('MotherFucker <ooxx@163.com>')

            ->title('12 Me!')

            ->content('<h1>Hello~~</h1>');
    }
}