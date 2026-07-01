<?php
namespace Database\Seeders;
use App\Models\{User,Category,Complaint,Suggestion};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        User::create(['name'=>'Admin Sekolah','email'=>'admin@sekolah.sch.id','password'=>Hash::make('password'),'role'=>'admin','phone'=>'081234567890','status'=>'active']);
        User::create(['name'=>'Andi Pratama','email'=>'andi@sekolah.sch.id','password'=>Hash::make('password'),'nis'=>'2024001','role'=>'user','kelas'=>'XI IPA 2','phone'=>'081234567891','status'=>'active']);
        User::create(['name'=>'Siti Nurhaliza','email'=>'siti@sekolah.sch.id','password'=>Hash::make('password'),'nis'=>'2024002','role'=>'user','kelas'=>'X IPA 1','phone'=>'081234567892','status'=>'active']);

        $cats = [
            ['name'=>'Fasilitas','description'=>'Sarana dan prasarana','type'=>'complaint'],
            ['name'=>'Kebersihan','description'=>'Kebersihan lingkungan','type'=>'complaint'],
            ['name'=>'Kurikulum','description'=>'Kurikulum & pembelajaran','type'=>'complaint'],
            ['name'=>'Lainnya','description'=>'Lain-lain','type'=>'complaint'],
            ['name'=>'Program Sekolah','description'=>'Saran program','type'=>'suggestion'],
            ['name'=>'Fasilitas','description'=>'Saran fasilitas','type'=>'suggestion'],
            ['name'=>'Ekstrakurikuler','description'=>'Saran ekskul','type'=>'suggestion'],
        ];
        foreach ($cats as $c) Category::create($c);

        $users = User::where('role','user')->get();
        $cCats = Category::where('type','complaint')->get();
        $sCats = Category::where('type','suggestion')->get();

        for ($i = 1; $i <= 15; $i++) {
            Complaint::create([
                'complaint_no' => '#PGD-'.date('Y').'-'.str_pad($i,4,'0',STR_PAD_LEFT),
                'user_id' => $users->random()->id, 'category_id' => $cCats->random()->id,
                'title' => 'Masalah contoh #'.$i, 'description' => 'Deskripsi pengaduan contoh nomor '.$i,
                'location' => 'Ruang '.rand(1,12),
                'status' => ['pending','processed','resolved','rejected'][rand(0,3)],
                'created_at' => now()->subDays(rand(1,60)),
            ]);
        }
        for ($i = 1; $i <= 8; $i++) {
            Suggestion::create([
                'suggestion_no' => '#SAR-'.date('Y').'-'.str_pad($i,4,'0',STR_PAD_LEFT),
                'user_id' => $users->random()->id, 'category_id' => $sCats->random()->id,
                'title' => 'Saran contoh #'.$i, 'description' => 'Deskripsi saran contoh nomor '.$i,
                'status' => ['pending','reviewed','implemented','rejected'][rand(0,3)],
                'created_at' => now()->subDays(rand(1,60)),
            ]);
        }
    }
}