<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
        ]);

        for ($i = 1; $i <= 10; $i++) {
             User::create([
            'username' => 'admin' . $i,
            'password' => Hash::make('password'),
            ]);
        }

        $blogsData = [
            [
                'title' => 'Mengenal Cengkeh: Emas Aromatik dari Nusantara',
                'subtitle' => 'Kenali sejarah, manfaat, dan potensi ekspor cengkeh Indonesia yang terus diminati dunia.',
                'content' => "Cengkeh (Syzygium aromaticum) telah lama dikenal sebagai salah satu rempah khas Indonesia yang memiliki aroma kuat dan cita rasa unik. Dibudidayakan secara turun-temurun di berbagai daerah seperti Maluku, Nusa Tenggara, dan Jawa Timur, cengkeh bukan hanya menjadi bahan baku rokok kretek, tetapi juga digunakan secara luas dalam industri makanan, minuman, obat-obatan, dan aromaterapi.\n\nPT Adhi Cahaya Global berkomitmen untuk memperkenalkan cengkeh berkualitas tinggi dari petani lokal Indonesia ke pasar internasional. Dengan sistem panen dan pengeringan yang terkendali, kami memastikan cengkeh yang dikirim memiliki kadar minyak atsiri tinggi, warna cokelat keemasan, dan ukuran seragam.\n\nKami bekerja langsung dengan koperasi petani untuk memastikan keberlanjutan pasokan dan harga yang adil. Ekspor cengkeh Indonesia terus meningkat, terutama ke negara-negara Timur Tengah, Afrika, dan Eropa yang menghargai kualitas alami dan autentik dari hasil bumi Nusantara.\n\nDengan standar ekspor yang ketat dan sistem pelacakan dari ladang hingga pelabuhan, kami menjadikan cengkeh bukan sekadar komoditas, tetapi warisan budaya yang dibawa ke dunia dengan bangga."
            ],
            [
                'title' => 'Jahe Kering: Rempah Multifungsi dengan Permintaan Global',
                'subtitle' => 'Peluang besar ekspor jahe kering dari Indonesia untuk industri kesehatan dan pangan.',
                'content' => "Jahe kering (Zingiber officinale) merupakan salah satu komoditas unggulan Indonesia yang banyak diminati di pasar global. Dikenal karena khasiatnya dalam menjaga kesehatan, menghangatkan tubuh, dan sebagai bahan baku obat herbal, minuman, dan makanan fungsional, permintaan jahe kering terus meningkat setiap tahun.\n\nPT Adhi Cahaya Global menyediakan jahe kering berkualitas ekspor dengan kadar air rendah, aroma tajam, dan bebas dari bahan kimia tambahan. Proses pengeringan dilakukan secara higienis dan terkendali untuk menjaga kandungan kurkumin dan senyawa bioaktif lainnya.\n\nKami bekerja langsung dengan petani di Jawa dan Bali untuk memastikan pasokan berkelanjutan dan kualitas konsisten. Dengan sistem sortasi ketat dan kemasan yang sesuai standar internasional, produk kami siap dikirim ke berbagai negara di Asia, Eropa, dan Timur Tengah.\n\nSebagai mitra etis, kami memastikan petani mendapatkan harga yang adil dan pelatihan untuk meningkatkan kualitas panen. Jahe kering Indonesia bukan hanya rempah, tapi juga aset kesehatan global."
            ],
            [
                'title' => 'Kemiri: Rempah Lokal dengan Potensi Ekspor Tinggi',
                'subtitle' => 'Mengapa kemiri semakin dicari di pasar internasional?',
                'content' => "Kemiri (Aleurites moluccanus) adalah salah satu rempah tradisional Indonesia yang sering digunakan untuk mengentalkan dan memberi rasa gurih pada masakan. Namun, di luar negeri, kemiri semakin dikenal karena kandungan minyaknya yang tinggi, mencapai 60-70%, menjadikannya bahan baku potensial untuk industri minyak nabati, kosmetik, dan biofuel.\n\nPT Adhi Cahaya Global memproduksi kemiri kering ekspor dengan ukuran seragam, kadar air rendah, dan bebas dari jamur. Kami memilih biji kemiri dari daerah dengan tanah vulkanik subur seperti Jawa Tengah dan Yogyakarta untuk memastikan kualitas terbaik.\n\nSetiap batch diperiksa secara ketat sebelum dikemas dalam karung berlapis liner untuk menjaga kesegaran selama pengiriman laut. Kami juga menyediakan kemiri yang sudah dipanggang atau dalam bentuk tepung sesuai permintaan pelanggan.\n\nDengan permintaan global yang terus naik dan pasokan lokal yang melimpah, kemiri Indonesia memiliki masa depan cerah sebagai komoditas ekspor bernilai tinggi."
            ],
            [
                'title' => 'Manfaat Ekonomi dan Lingkungan dari Pertanian Kunyit Berkelanjutan',
                'subtitle' => 'Kunyit tidak hanya sehat, tapi juga memberdayakan petani dan menjaga alam.',
                'content' => "Kunyit (Curcuma longa) dikenal sebagai 'remponan emas' karena warnanya yang mencolok dan manfaat kesehatannya yang luar biasa. Senyawa kurkumin di dalamnya memiliki sifat anti-inflamasi, antioksidan, dan antimikroba, membuat kunyit populer di industri suplemen, makanan, dan perawatan kulit.\n\nDi Indonesia, budidaya kunyit masih banyak dilakukan secara tradisional. PT Adhi Cahaya Global hadir untuk membantu petani mengadopsi praktik pertanian berkelanjutan yang ramah lingkungan, seperti penggunaan pupuk organik dan rotasi tanaman, sehingga tanah tetap subur dan produktivitas meningkat.\n\nKami membeli kunyit kering dari petani mitra dengan harga yang kompetitif dan memberikan pelatihan panen dan pasca-panen. Setelah diproses, kunyit kami dikirim ke pembeli di Eropa dan Amerika yang mencari bahan alami dan etis.\n\nDengan memilih kunyit dari petani Indonesia, dunia tidak hanya mendapatkan produk alami terbaik, tetapi juga mendukung pembangunan pedesaan dan pelestarian lingkungan."
            ],
            [
                'title' => 'Kayu Manis Indonesia: Aroma Khas yang Dicintai Dunia',
                'subtitle' => 'Mengapa kayu manis dari Jawa dan Sumatera menjadi primadona ekspor?',
                'content' => "Kayu manis (Cinnamomum burmannii) dari Indonesia dikenal karena aroma yang kuat, rasa manis pedas, dan kandungan minyak atsiri tinggi. Berbeda dengan jenis kayu manis lain, produk asal Indonesia sangat diminati di pasar internasional, terutama untuk industri makanan, minuman, dan farmasi.\n\nPT Adhi Cahaya Global menyediakan kayu manis kering dalam bentuk stik dan bubuk, diproses dari kulit pohon yang dipanen secara lestari. Kami bekerja dengan petani di Jawa Timur dan Sumatera Selatan yang menjaga keberlanjutan hutan sambil menghasilkan komoditas berkualitas ekspor.\n\nSetiap partai diperiksa kadar kelembapan, cemaran mikroba, dan kemurniannya. Kemasan disesuaikan dengan kebutuhan pelanggan, baik dalam karung, kantong vakum, maupun kontainer curah.\n\nKami percaya bahwa perdagangan yang adil dan transparan akan membawa manfaat jangka panjang bagi petani, pembeli, dan lingkungan. Kayu manis Indonesia bukan hanya rempah, tapi simbol dari kekayaan alam yang dikelola dengan bijak."
            ],
            [
                'title' => 'Jagung Kuning: Komoditas Strategis untuk Pangan dan Pakan',
                'subtitle' => 'Dari ladang Mojokerto hingga pasar global, jagung kuning Indonesia memenuhi kebutuhan pangan dunia.',
                'content' => "Jagung kuning (Zea mays) adalah salah satu komoditas pertanian utama Indonesia yang digunakan sebagai bahan pangan, pakan ternak, dan bahan baku industri. Dengan iklim tropis yang mendukung, Indonesia mampu memproduksi jagung berkualitas tinggi sepanjang tahun.\n\nPT Adhi Cahaya Global memasok jagung kuning kering dari petani di Jawa, Nusa Tenggara, dan Sulawesi. Produk kami memiliki kadar air rendah, bebas dari hama, dan memenuhi standar internasional untuk ekspor.\n\nKami menerapkan sistem sortasi dan penyimpanan modern untuk menjaga kualitas selama masa tunggu pengiriman. Jagung kami digunakan oleh pabrik pakan ternak di Vietnam, pabrik tepung di Thailand, dan perusahaan makanan di Timur Tengah.\n\nDengan rantai pasok yang transparan dan hubungan langsung dengan petani, kami memastikan konsistensi pasokan dan harga yang kompetitif. Jagung bukan hanya makanan, tapi juga tulang punggung ketahanan pangan global."
            ],
            [
                'title' => 'Mengapa Perdagangan Etis Penting dalam Ekspor Rempah?',
                'subtitle' => 'Membangun hubungan jangka panjang yang adil antara petani dan pembeli global.',
                'content' => "Perdagangan etis bukan sekadar tren, tapi kebutuhan. Di PT Adhi Cahaya Global, kami percaya bahwa setiap komoditas yang diekspor harus membawa manfaat nyata bagi petani yang menanamnya. Itu sebabnya kami membangun kemitraan langsung dengan petani dan koperasi, tanpa perantara yang memperpanjang rantai dan menekan harga.\n\nDengan perdagangan etis, petani mendapatkan harga yang adil, akses ke pelatihan, dan jaminan pasar jangka panjang. Kami juga membantu mereka menerapkan praktik pertanian berkelanjutan yang ramah lingkungan.\n\nBagi pembeli internasional, perdagangan etis berarti kepastian kualitas, transparansi asal-usul produk, dan reputasi bisnis yang kuat. Konsumen global semakin peduli dari mana produk mereka berasal dan bagaimana diperlakukan.\n\nKami tidak hanya menjual rempah — kami membangun kepercayaan. Dan kepercayaan itu dimulai dari ladang, dari petani, dari kejujuran."
            ],
            [
                'title' => 'Sertifikasi dan Standar Ekspor untuk Komoditas Pertanian Indonesia',
                'subtitle' => 'Memahami ISO, HACCP, dan Codex untuk memastikan produk diterima di pasar global.',
                'content' => "Untuk bisa bersaing di pasar internasional, produk pertanian Indonesia harus memenuhi standar keamanan pangan dan kualitas yang ketat. PT Adhi Cahaya Global memastikan semua produk kami memenuhi atau melampaui persyaratan seperti ISO, HACCP, dan Codex Alimentarius.\n\nISO menjamin sistem manajemen yang terstruktur, HACCP fokus pada identifikasi bahaya pangan, dan Codex memberikan pedoman internasional untuk kualitas dan keamanan pangan. Meskipun kami belum bersertifikasi penuh, proses kami sepenuhnya selaras dengan standar-standar ini.\n\nSetiap batch produk diuji laboratorium untuk cemaran mikroba, logam berat, dan residu pestisida. Kami juga menyediakan dokumen lengkap: sertifikat asal, analisis laboratorium, dan dokumen fumigasi.\n\nDengan sistem pelacakan dari petani hingga pelabuhan, kami menjamin keaslian dan kualitas produk. Ini adalah komitmen kami terhadap pembeli global yang menginginkan kepastian dan keamanan dalam setiap transaksi."
            ],
            [
                'title' => 'Dari Petani ke Dunia: Kisah Sukses Koperasi Lokal yang Go Global',
                'subtitle' => 'Bagaimana kerja sama dengan PT Adhi Cahaya Global membuka akses pasar internasional.',
                'content' => "Di sebuah desa kecil di lereng Gunung Wilis, Jawa Timur, para petani rempah dulu hanya menjual hasil panen ke pengepul lokal dengan harga rendah. Kini, mereka adalah bagian dari rantai pasok ekspor global berkat kemitraan dengan PT Adhi Cahaya Global.\n\nMelalui pelatihan kualitas panen, pengeringan, dan sortasi, koperasi ini berhasil meningkatkan nilai jual produk hingga 40%. Kami membeli langsung dari mereka, menghilangkan perantara, dan memberikan pembayaran tepat waktu.\n\nProduk mereka — terutama jahe dan kunyit — kini diekspor ke Jerman, Jepang, dan Uni Emirat Arab. Banyak petani yang sudah bisa memperbaiki rumah, menyekolahkan anak, dan membeli alat pertanian baru.\n\nIni adalah bukti bahwa perdagangan yang adil dan transparan bisa membawa perubahan nyata. Kami bangga menjadi jembatan antara petani Indonesia dan pasar dunia."
            ],
            [
                'title' => 'Masa Depan Pertanian Indonesia: Berkelanjutan, Inklusif, dan Berorientasi Ekspor',
                'subtitle' => 'Visi PT Adhi Cahaya Global dalam mendukung pertanian modern yang tetap ramah lingkungan.',
                'content' => "Indonesia memiliki potensi besar sebagai lumbung pangan dan rempah dunia. Namun, tantangan seperti perubahan iklim, keterbatasan akses pasar, dan kurangnya teknologi masih menghambat petani kecil.\n\nPT Adhi Cahaya Global percaya bahwa masa depan pertanian harus berkelanjutan, inklusif, dan berorientasi ekspor. Kami mendukung petani dengan akses ke pasar global, pelatihan praktik ramah lingkungan, dan sistem pembayaran yang adil.\n\nKami juga mendorong penggunaan kemasan ramah lingkungan, pengurangan limbah, dan pengelolaan sumber daya alam yang bijaksana. Setiap komoditas yang kami ekspor harus meninggalkan jejak ekologis yang minimal.\n\nDengan memadukan tradisi, teknologi, dan etika bisnis, kami yakin pertanian Indonesia bisa bersaing di dunia. Bukan hanya sebagai penjual, tapi sebagai pemimpin dalam perdagangan komoditas alami yang bertanggung jawab."
            ],
        ];

        foreach ($blogsData as $index => $data) {
            $blog = Blog::create([
                'slug' => Str::slug($data['title']),
                'image' => env('APP_URL', 'http://localhost') . '/storage/images/blogs/blog' . ($index + 1) . '.jpg',
            ]);

            $blog->translations()->create([
                'lang' => 'id',
                'title' => $data['title'],
                'subtitle' => $data['subtitle'],
                'content' => $data['content'],
            ]);
        }

        $blogs = Blog::all();
        $enData = [
            [
                'title' => 'Cloves: Indonesia’s Aromatic Gold',
                'subtitle' => 'Discover the history, benefits, and export potential of Indonesian cloves loved worldwide.',
                'content' => "Cloves (Syzygium aromaticum) are one of Indonesia’s most iconic spices, known for their strong aroma and unique flavor. Cultivated for generations in regions like Maluku, Nusa Tenggara, and East Java, cloves are not only essential for traditional kretek cigarettes but also widely used in food, beverages, medicine, and aromatherapy.\n\nPT Adhi Cahaya Global is committed to introducing high-quality cloves from Indonesian farmers to international markets. With controlled harvesting and drying processes, we ensure our cloves have high essential oil content, golden-brown color, and uniform size.\n\nWe work directly with farmer cooperatives to guarantee sustainable supply and fair pricing. Indonesian clove exports continue to grow, especially to markets in the Middle East, Africa, and Europe, where natural and authentic agricultural products are highly valued.\n\nWith strict export standards and traceability from farm to port, we turn cloves into more than a commodity — they become a cultural heritage proudly shared with the world."
            ],
            [
                'title' => 'Dried Ginger: A Versatile Spice with Global Demand',
                'subtitle' => 'The growing global demand for Indonesian dried ginger in health and food industries.',
                'content' => "Dried ginger (Zingiber officinale) is one of Indonesia’s leading agricultural exports, highly sought after in global markets. Known for its health benefits, warming properties, and use in herbal medicine, functional foods, and beverages, demand for dried ginger continues to rise annually.\n\nPT Adhi Cahaya Global supplies export-grade dried ginger with low moisture content, strong aroma, and no added chemicals. Our drying process is hygienic and carefully controlled to preserve curcumin and other bioactive compounds.\n\nWe collaborate directly with farmers in Java and Bali to ensure sustainable supply and consistent quality. With strict sorting and internationally compliant packaging, our products are ready for shipment to Asia, Europe, and the Middle East.\n\nAs an ethical partner, we ensure farmers receive fair prices and training to improve harvest quality. Indonesian dried ginger is not just a spice — it’s a global health asset."
            ],
            [
                'title' => 'Candlenut: A Local Spice with High Export Potential',
                'subtitle' => 'Why candlenut is gaining attention in international markets?',
                'content' => "Candlenut (Aleurites moluccanus) is a traditional Indonesian spice commonly used to thicken and add richness to local dishes. However, globally, candlenut is increasingly recognized for its high oil content — up to 60–70% — making it a valuable raw material for vegetable oil, cosmetics, and biofuel industries.\n\nPT Adhi Cahaya Global produces export-quality dried candlenut with uniform size, low moisture, and free from mold. We source nuts from volcanic-rich regions like Central Java and Yogyakarta to ensure superior quality.\n\nEach batch is rigorously inspected before being packed in lined jute bags to maintain freshness during sea freight. We also offer roasted candlenut or candlenut powder upon customer request.\n\nWith rising global demand and abundant local supply, Indonesian candlenut has a bright future as a high-value export commodity."
            ],
            [
                'title' => 'Economic and Environmental Benefits of Sustainable Turmeric Farming',
                'subtitle' => 'Turmeric is not only healthy — it empowers farmers and protects nature.',
                'content' => "Turmeric (Curcuma longa) is known as 'golden spice' due to its vibrant color and exceptional health benefits. Its curcumin content offers anti-inflammatory, antioxidant, and antimicrobial properties, making turmeric highly popular in supplement, food, and skincare industries.\n\nIn Indonesia, turmeric is still largely grown using traditional methods. PT Adhi Cahaya Global supports farmers in adopting sustainable, eco-friendly practices such as organic fertilizers and crop rotation to maintain soil fertility and increase productivity.\n\nWe purchase dried turmeric directly from partner farmers at competitive prices and provide post-harvest training. After processing, our turmeric is shipped to buyers in Europe and North America seeking natural and ethically sourced ingredients.\n\nBy choosing turmeric from Indonesian farmers, the world gains not only the finest natural product but also supports rural development and environmental conservation."
            ],
            [
                'title' => 'Indonesian Cinnamon: The World’s Favorite Aromatic Bark',
                'subtitle' => 'Why cinnamon from Java and Sumatra dominates the global export market?',
                'content' => "Indonesian cinnamon (Cinnamomum burmannii) is prized for its strong aroma, sweet-spicy flavor, and high essential oil content. Unlike other cinnamon varieties, Indonesian cinnamon is highly favored in international markets, especially for food, beverage, and pharmaceutical industries.\n\nPT Adhi Cahaya Global supplies dried cinnamon in stick and powder forms, processed from bark harvested sustainably. We work with farmers in East Java and South Sumatra who maintain forest sustainability while producing export-quality commodities.\n\nEach batch is tested for moisture, microbial contamination, and purity. Packaging is customized to customer needs — from jute bags and vacuum packs to bulk containers.\n\nWe believe fair and transparent trade brings long-term benefits to farmers, buyers, and the environment. Indonesian cinnamon is not just a spice — it’s a symbol of wisely managed natural wealth."
            ],
            [
                'title' => 'Yellow Corn: A Strategic Commodity for Food and Feed',
                'subtitle' => 'From Mojokerto fields to global markets — Indonesian yellow corn meets world food demand.',
                'content' => "Yellow corn (Zea mays) is one of Indonesia’s key agricultural commodities, used for food, animal feed, and industrial raw materials. Thanks to its tropical climate, Indonesia can produce high-quality corn year-round.\n\nPT Adhi Cahaya Global supplies dried yellow corn sourced from farmers in Java, Nusa Tenggara, and Sulawesi. Our product has low moisture, is pest-free, and meets international export standards.\n\nWe use modern sorting and storage systems to maintain quality during shipping preparation. Our corn is used by animal feed mills in Vietnam, flour factories in Thailand, and food companies in the Middle East.\n\nWith a transparent supply chain and direct partnerships with farmers, we ensure consistent supply and competitive pricing. Corn is not just food — it’s the backbone of global food security."
            ],
            [
                'title' => 'Why Ethical Trade Matters in Spice Exporting',
                'subtitle' => 'Building long-term, fair relationships between farmers and global buyers.',
                'content' => "Ethical trade is not just a trend — it’s a necessity. At PT Adhi Cahaya Global, we believe every exported commodity should bring real benefits to the farmers who grow it. That’s why we build direct partnerships with farmers and cooperatives, eliminating middlemen that lengthen the chain and reduce prices.\n\nThrough ethical trade, farmers receive fair prices, access to training, and long-term market security. We also help them adopt sustainable, eco-friendly farming practices.\n\nFor international buyers, ethical trade means quality assurance, transparent sourcing, and strong business reputation. Global consumers increasingly care about where their products come from and how they are produced.\n\nWe don’t just sell spices — we build trust. And trust begins at the farm, with the farmer, through honesty."
            ],
            [
                'title' => 'Export Certifications and Standards for Indonesian Agricultural Commodities',
                'subtitle' => 'Understanding ISO, HACCP, and Codex to ensure global market acceptance.',
                'content' => "To compete internationally, Indonesian agricultural products must meet strict food safety and quality standards. PT Adhi Cahaya Global ensures all our products meet or exceed requirements such as ISO, HACCP, and Codex Alimentarius.\n\nISO guarantees structured management systems, HACCP focuses on food hazard control, and Codex provides international guidelines for food quality and safety. Although we are not yet fully certified, our processes fully align with these standards.\n\nEvery product batch is lab-tested for microbial contamination, heavy metals, and pesticide residues. We also provide complete documentation: certificates of origin, lab analysis, and fumigation reports.\n\nWith traceability from farmer to port, we guarantee authenticity and quality. This is our commitment to global buyers who expect certainty and safety in every transaction."
            ],
            [
                'title' => 'From Farmer to the World: The Success Story of a Local Cooperative Going Global',
                'subtitle' => 'How partnership with PT Adhi Cahaya Global opened access to international markets.',
                'content' => "In a small village on the slopes of Mount Wilis, East Java, spice farmers once sold their harvest to local collectors at low prices. Today, they are part of a global export supply chain through their partnership with PT Adhi Cahaya Global.\n\nThrough training in harvest quality, drying, and sorting, this cooperative has increased their product value by up to 40%. We buy directly from them, eliminate middlemen, and ensure timely payments.\n\nTheir products — especially ginger and turmeric — are now exported to Germany, Japan, and the UAE. Many farmers have improved their homes, sent their children to school, and purchased new farming tools.\n\nThis proves that fair and transparent trade can create real change. We are proud to be the bridge between Indonesian farmers and the global market."
            ],
            [
                'title' => 'The Future of Indonesian Agriculture: Sustainable, Inclusive, and Export-Oriented',
                'subtitle' => 'PT Adhi Cahaya Global’s vision in supporting modern, eco-friendly farming.',
                'content' => "Indonesia has great potential to be a global hub for food and spices. However, challenges like climate change, limited market access, and lack of technology still hinder small farmers.\n\nPT Adhi Cahaya Global believes the future of agriculture must be sustainable, inclusive, and export-oriented. We support farmers with access to global markets, training in eco-friendly practices, and fair payment systems.\n\nWe also promote eco-friendly packaging, waste reduction, and responsible natural resource management. Every commodity we export should leave a minimal ecological footprint.\n\nBy combining tradition, technology, and ethical business practices, we believe Indonesian agriculture can compete globally — not just as a seller, but as a leader in responsible natural commodity trade."
            ],
        ];

        foreach ($blogs as $index => $blog) {
            $blog->translations()->create([
                'lang' => 'en',
                'title' => $enData[$index]['title'],
                'subtitle' => $enData[$index]['subtitle'],
                'content' => $enData[$index]['content'],
            ]);
        }
    }
}
