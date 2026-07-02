<?php
namespace Database\Seeders;
use App\Models\{User,Category,Complaint,Suggestion};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        // Truncate tables
        Complaint::truncate();
        Suggestion::truncate();
        Category::truncate();
        User::where('role', 'user')->delete();
        
        // Create admin
        User::updateOrCreate(
            ['email' => 'admin@sekolah.sch.id'],
            ['name'=>'Admin Sekolah','password'=>Hash::make('password'),'role'=>'admin','phone'=>'081234567890','status'=>'active']
        );
        
        // Create users
        User::updateOrCreate(
            ['email' => 'andi@sekolah.sch.id'],
            ['name'=>'Andi Pratama','password'=>Hash::make('password'),'nis'=>'2024001','role'=>'user','kelas'=>'XI IPA 2','phone'=>'081234567891','status'=>'active']
        );
        
        User::updateOrCreate(
            ['email' => 'siti@sekolah.sch.id'],
            ['name'=>'Siti Nurhaliza','password'=>Hash::make('password'),'nis'=>'2024002','role'=>'user','kelas'=>'X IPA 1','phone'=>'081234567892','status'=>'active']
        );

        // Create categories
        $cats = [
            ['name'=>'Fasilitas','description'=>'Sarana dan prasarana','type'=>'complaint'],
            ['name'=>'Kebersihan','description'=>'Kebersihan lingkungan','type'=>'complaint'],
            ['name'=>'Kurikulum','description'=>'Kurikulum & pembelajaran','type'=>'complaint'],
            ['name'=>'Lainnya','description'=>'Lain-lain','type'=>'complaint'],
            ['name'=>'Program Sekolah','description'=>'Saran program','type'=>'suggestion'],
            ['name'=>'Fasilitas','description'=>'Saran fasilitas','type'=>'suggestion'],
            ['name'=>'Ekstrakurikuler','description'=>'Saran ekskul','type'=>'suggestion'],
        ];
        
        foreach ($cats as $c) {
            Category::updateOrCreate(['name' => $c['name'], 'type' => $c['type']], $c);
        }

        $users = User::where('role','user')->get();
        $cCats = Category::where('type','complaint')->get();
        $sCats = Category::where('type','suggestion')->get();

        // Create complaints
        for ($i = 1; $i <= 15; $i++) {
            Complaint::create([
                'complaint_no' => '#PGD-'.date('Y').'-'.str_pad($i,4,'0',STR_PAD_LEFT),
                'user_id' => $users->random()->id, 
                'category_id' => $cCats->random()->id,
                'title' => 'Masalah contoh #'.$i, 
                'description' => 'Deskripsi pengaduan contoh nomor '.$i,
                'location' => 'Ruang '.rand(1,12),
                'status' => ['pending','processed','resolved','rejected'][rand(0,3)],
                'created_at' => now()->subDays(rand(1,60)),
            ]);
        }
        
        // Create suggestions
        for ($i = 1; $i <= 8; $i++) {
            Suggestion::create([
                'suggestion_no' => '#SAR-'.date('Y').'-'.str_pad($i,4,'0',STR_PAD_LEFT),
                'user_id' => $users->random()->id, 
                'category_id' => $sCats->random()->id,
                'title' => 'Saran contoh #'.$i, 
                'description' => 'Deskripsi saran contoh nomor '.$i,
                'status' => ['pending','reviewed','implemented','rejected'][rand(0,3)],
                'created_at' => now()->subDays(rand(1,60)),
            ]);
        }
    }
}