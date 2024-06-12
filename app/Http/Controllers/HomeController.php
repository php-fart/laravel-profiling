<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Ramsey\Uuid\Uuid;

final class HomeController extends Controller
{
    protected static array $data = [];

    public function __invoke()
    {
        for ($i = 0; $i < 10; $i++) {
            self::$data[] = [
                'id' => $i,
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
            ];
        }

        \dump(self::$data);

        return view('welcome');
    }
}
