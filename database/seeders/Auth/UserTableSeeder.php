<?php

namespace Database\Seeders\Auth;

use App\Events\Backend\UserCreated;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        // Add the master administrator, user id of 1
        $avatarPath = config('app.avatar_base_path');
        $admin1 = User::create([
            'carnet' => '0',
            'first_name' => 'marcos',
            'last_name' => 'berrios',
            'email' => 'marcos@marcos.com',
            'celular' => 0000000,
            'password' => Hash::make('123456789'),
            'fechaNacimiento' => Carbon::now(),
            'email_verified_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        $admin1->assignRole('admin');
        $admin = User::create([
            'carnet' => '0',
            'first_name' => 'Admin',
            'last_name' => 'Demo',
            'email' => 'admin@demo.com',
            'celular' => 0000000,
            'password' => Hash::make('12345678'),
            'fechaNacimiento' => Carbon::now(),
            'email_verified_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        $admin->assignRole('admin');
        $users = [
            [
                'carnet' => '0',
                'first_name' => 'John',
                'last_name' => 'Richards',
                'email' => 'john.richards@hotmail.com',
                'celular' => 0000000,
                'password' => Hash::make('12345678'),
                'fechaNacimiento' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
        ];

        if (env('IS_DUMMY_DATA')) {
            foreach ($users as $key => $user_data) {
                $user = User::create($user_data);
                $user->assignRole('user');
                event(new UserCreated($user));
            }
            if (env('IS_FAKE_DATA')) {
                User::factory()->count(30)->create()->each(function ($user) {
                    $user->assignRole('user');
                    $img = public_path('/dummy-images/customers/' . fake()->numberBetween(1, 13) . '.webp');
                    $this->attachFeatureImage($user, $img);
                });
            }
        }

        Schema::enableForeignKeyConstraints();
    }

    private function attachFeatureImage($model, $publicPath)
    {
        if (! env('IS_DUMMY_DATA_IMAGE')) {
            return false;
        }

        $file = new \Illuminate\Http\File($publicPath);

        $media = $model->addMedia($file)->preservingOriginal()->toMediaCollection('profile_image');

        return $media;
    }
}
