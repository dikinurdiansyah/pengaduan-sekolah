<?php
namespace Database\Seeders;
use App\Models\{User,Category,Complaint,Suggestion};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        User::updateOrCreate(
            ['email' => 'admin@sekolah.sch.id'],
            ['name'=>'Admin Sekolah','password'=>Hash::make('password'),'role'=>'admin','phone'=>'081234567890','status'=>'active']
        );
        User::updateOrCreate(
            ['email' => 'andi@sekolah.sch.id'],
            ['name'=>'Andi Pratama','password'=>Hash::make('password'),'nis'=>'2024001','role'=>'user','kelas'=>'XI IPA 2','phone'=>'081234567891','status'=>'active']
        );
        User::updateOrCreate(
            ['email' => 'siti@sekolah.sch.id'],
            ['name'=>'Siti Nurhaliza','password'=>Hash::make('password'),'nis'=>'2024002','role'=>'user','kelas'=>'X IPA 1','phone'=>'081234567892','status'=>'active']
        );
        $cats = [
            ['name'=>'Fasilitas','description'=>'Sarana','type'=>'complaint'],
            ['name'=>'Kebersihan','description'=>'Kebersihan','type'=>'complaint'],
            ['name'=>'Program Sekolah','description'=>'Program','type'=>'suggestion'],
        ];
        foreach ($cats as $c) {
            Category::updateOrCreate(['name' => $c['name'], 'type' => $c['type']], $c);
        }
    }
}