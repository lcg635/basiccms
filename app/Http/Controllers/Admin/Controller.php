<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    protected function success($message, $buttons = [], $old = [])
    {
    	return $this->notify(0, $message, $buttons, $old);
    }

    protected function error($message, $buttons = [], $old = [])
    {
    	return $this->notify(1, $message, $buttons, $old);
    }

    protected function notify($error, $message, $buttons = [], $old = [])
    {
    	return view('admin/notify', compact('error', 'message', 'buttons'))->withInput($old);
    }

}
