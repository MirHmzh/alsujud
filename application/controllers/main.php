<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->uri->segment(3)) {
			$this->id = $this->uri->segment(2);
			$this->data['token'] = $this->uri->segment(3);
		}else if($this->uri->segment(2)){
			$this->data['token'] = $this->uri->segment(2);
		}else{
			if($this->isTokenValid($this->uri->segment(1)) || $this->uri->segment(1) == 'tokenalsujud'){
				$this->data['token'] = $this->uri->segment(1);
			}else{
				redirect('/marketing');
			}
		}
	}

	function isTokenValid($val)
	{
		$val = base64_decode($val, FALSE);
		if ($val) {
			$year = substr($val, 0, 4);
			$string = substr($val, 5, 7);
			$month = substr($val, 13, 2);
			$date = substr($val, 15, 2);
			$prodnum = substr($val, 18, 3);
			if (
				(strlen($year) == 4 &&
				$string == 'alsujud' &&
				$month <= 12 &&
				$date <= 31 &&
				strlen($prodnum) == 3) || $val == 'tokenalsujud'
			) {
				return TRUE;
			}
		}else{
			return FALSE;
		}

	}

	public function index()
	{
		$this->load->view('home', $this->data);
	}

	function kiblat()
	{
		$this->load->view('compass', $this->data);
	}

	function bacaan_sholat()
	{
		$this->load->view('bacaan_sholat', $this->data);
	}

	function setelah_sholat()
	{
		$this->load->view('doa_setelah_sholat', $this->data);
	}

	function dzikir_pilihan()
	{
		$this->load->view('dzikir_pilihan', $this->data);
	}

	function juz_amma()
	{
		$this->load->view('juz_amma', $this->data);
	}

	function detil_bacaan_sholat()
	{
		switch ($this->id) {
			case 1:
				$this->data['lafadz'] = 'نَوَيْتُ الْوُضُوْءَ لِرَفْعِ الْحَدَثِ اْلاَصْغَرِ فَرْضًا ِللهِ تَعَالَى';
				$this->data['arti'] = 'Saya niat berwudhu untuk menghilangkan hadast kecil fardu (wajib) karena Allah ta’ala';
				$this->data['judul'] = 'Doa Sebelum Wudhu';
				$this->data['sound'] = base_url('assets/audio/niat_wudhu.mp3');
				break;

			case 2:
				$this->data['lafadz'] = 'اَشْهَدُاَنْ لَااِلٰهَ اِلَّا اللّٰهُ وَحْدَهُ لَاشَرِيْكَ لَهُ. وَاَشْهَدُ اَنَّ مُحَمَّدًاعَبْدُهُ وَرَسُوْلُهُ. اَللّٰهُمَّ اجْعَلْنِىْ مِنَاالتَّوَّابِيْنَ، وَجْعَلْنِيْ مِنَ الْمُتَطَهِّرِيْنَ، وَجْعَلْنِىْ مِنْ عِبَادِكَ الصَّالِحِيْنَ';
				$this->data['arti'] = 'Saya bersaksi tiada Tuhan melainkan Allah yang esa , tiada sekutu bagi-Nya . Dan saya bersaksi bahwa nabi Muhammad adalah hamba-Nya dan utusan-Nya . Ya Allah jadikanlah saya orang yang ahli taubat , dan jadikanlah saya orang yang suci , dan jadikanlah saya dari golongan hamba-hamba Mu yang shaleh.';
				$this->data['judul'] = 'Doa Sesudah Wudhu';
				$this->data['sound'] = base_url('assets/audio/setelah_wudhu.mp3');
				break;

			case 3:
				$this->data['lafadz'] = 'للهُمَّ رَبَّ هذِهِ الدَّعْوَةِ التَّآمَّةِ، وَالصَّلاَةِ الْقَآئِمَةِ، آتِ مُحَمَّدَانِ الْوَسِيْلَةَ وَالْفَضِيْلَةَ وَالشَّرَفَ وَالدَّرَجَةَ الْعَالِيَةَ الرَّفِيْعَةَ وَابْعَثْهُ مَقَامًامَحْمُوْدَانِ الَّذِىْ وَعَدْتَهُ اِنَّكَ لاَتُخْلِفُ الْمِيْعَادَ';
				$this->data['arti'] = 'Ya Allah, Tuhan pemilik panggilan yang sempurna (adzan) ini dan shalat (wajib) yang didirikan. Berilah al-wasilah (derajat di surga), dan al-fadhilah (keutamaan) kepada nabi Muhammad. Dan bangkitkanlah beliau sehingga bisa menempati kedudukan terpuji yang Engkau janjikan';
				$this->data['judul'] = 'Doa Setelah Adzan';
				$this->data['sound'] = base_url('assets/audio/adzan.mp3');
				break;

			case 4:
				$this->data['lafadz'] = 'اللهُ اَكْبَرُ كَبِرًا وَالْحَمْدُ لِلهِ كَثِيْرًا وَسُبْحَانَ اللهِ بُكْرَةً وَاَصِيْلًا . اِنِّى وَجَّهْتُ وَجْهِيَ لِلَّذِيْ فَطَرَالسَّمَاوَاتِ وَالْااَرْضَ حَنِيْفًا مُسْلِمًا وَمَا اَنَا مِنَ الْمُشْرِكِيْنَ . اِنَّ صَلَاتِيْ وَنُسُكِيْ وَمَحْيَايَ وَمَمَاتِيْ لِلهِ رَبِّ الْعَا لَمِيْنَ . لاَ شَرِيْكَ لَهُ وَبِذَ لِكَ اُمِرْتُ وَاَنَ مِنَ الْمُسْلِمِيْنَ';
				$this->data['arti'] = 'Allah Maha Besar dengan sebesar-besarnya, segala puji bagi Allah dengan pujian yang banyak. Maha Suci Allah pada waktu pagi dan petang.
					<br>
					Sesungguhnya aku hadapkan wajahku kepada Allah yang telah menciptakan langit dan bumi dengan segenap kepatuhan atau dalam keadaan tunduk, dan aku bukanlah dari golongan orang-orang yang menyekutukan-Nya.
					<br>
					Sesungguhnya sholatku, ibadahku, hidup dan matiku hanyalah untuk Allah Tuhan Semesta Alam, yang tidak ada sekutu bagi-Nya. Dengan yang demikian itulah aku diperintahkan. Dan aku adalah termasuk orang-orang muslim (Orang-orang yang berserah diri).';
				$this->data['judul'] = 'Doa Iftitah';
				$this->data['sound'] = base_url('assets/audio/iftitah.mp3');
				break;

			case 5:
				$this->data['lafadz'] = 'سُبْحَانَ رَبِّىَ الْعَظِيمِ وَبِحَمْدِهِ';
				$this->data['arti'] = 'Mahasuci Tuhanku yang Mahaagung dan segala puji bagiNya';
				$this->data['judul'] = "Doa Ruku'";
				$this->data['sound'] = base_url('assets/audio/ruku.mp3');
				break;

			case 6:
				$this->data['lafadz'] = 'رَبَّنَا وَلَكَ الْحَمْدُ مِلْءَ السَّمَاوَاتِ وَمِلْءَ الْأَرْضِ وَمِلْءَ مَا شِئْتَ مِنْ شَيْءٍ بَعْدُ';
				$this->data['arti'] = 'Wahai Tuhan kami, bagiMu segala puji, sepenuh langit dan sepenuh bumi, dan sepenuh apa yang Engkau inginkan dari sesuatu setelahnya';
				$this->data['judul'] = "Doa I'tidal";
				$this->data['sound'] = base_url('assets/audio/itidal.mp3');
				break;

			case 7:
				$this->data['lafadz'] = 'سُبْحَانَ رَبِّىَ الْأَعْلَى وَبِحَمْدِهِ';
				$this->data['arti'] = 'Mahasuci Tuhanku yang Mahatinggi dan segala puji bagiNya';
				$this->data['judul'] = 'Doa Sujud';
				$this->data['sound'] = base_url('assets/audio/sujud.mp3');
				break;

			case 8:
				$this->data['lafadz'] = 'رَبِّ اغْفِرْ لِيْ وَارْحَمْنِيْ وَاجْبُرْنِيْ وَارفَعْنِيْ وَارْزُقْنِيْ وَاهْدِنِيْ وَعَافِنِيْ وَاعْفُ عَنِّيْ';
				$this->data['arti'] = 'Ya Tuhanku, ampunilah aku, kasihanilah aku, benarkanlah aku, angkatlah derajatku, karuniakanlah aku rezeki, sehatkanlah aku, dan maafkanlah aku';
				$this->data['judul'] = 'Doa Diantara Dua Sujud';
				$this->data['sound'] = base_url('assets/audio/iftirasy.mp3');
				break;

			case 9:
				$this->data['lafadz'] = 'سَجَدَ وَجْهِى لِلَّذِى خَلَقَهُ وَصَوَّرَهُ وَشَقَّ سَمْعَهُ وَبَصَرَهُ بِحَوْلِهِ وَقُوَّتِهِ تَبَارَكَ اللَّهُ أَحْسَنُ الْخَالِقِينَ';
				$this->data['arti'] = 'Wajahku bersujud kepada Dzat yang menciptakannya, yang membentuknya, dan yang memberi pendengaran dan penglihatan, Maha berkah Allah sebaik-baiknya pencipta';
				$this->data['judul'] = 'Doa Sujud Tilawah';
				$this->data['sound'] = base_url('assets/audio/sujud_tilawah.mp3');
				break;

			case 10:
				$this->data['lafadz'] = 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلَّهِ السَّلاَمُ عَلَيْكَ أَيُّهَا النَّبِىُّ وَرَحْمَةُ اللَّهِ وَبَرَكَاتُهُ السَّلاَمُ عَلَيْنَا وَعَلَى عِبَادِ اللَّهِ الصَّالِحِينَ أَشْهَدُ أَنْ لاَ إِلَهَ إِلاَّ اللَّهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُولُ اللَّهِ أَللهُمَّ صَلِّ عَلى سَيِّدِنَا مُحَمَّدٍ ، وَعَلَى آلِ سَيِّدِنَا مُحَمَّدٍ ، كَمَا صَلَّيْتَ عَلَى سَيِّدِنَا إِبْرَاهِيمَ وَعَلَى آلِ سَيِّدِنَا إِبْرَاهِيمَ ، وبَارِكْ عَلَى سَيِّدِنَا مُحَمَّدٍ ، وَعَلَى آلِ سَيِّدِنَا مُحَمَّدٍ ، كَمَا بَارَكْتَ عَلَى سَيِّدِنَا إِبْرَاهِيمَ ، وَعَلَى آلِ سَيِّدِنَا إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ';
				$this->data['arti'] = 'Segala ucapan selamat, keberkahan, shalawat, dan kebaikan adalah bagi Allah. Mudah-mudahan kesejahteraan dilimpahkan kepadamu wahai Nabi beserta rahmat Allah dan barakah-Nya. Mudah-mudahan kesejahteraan dilimpahkan pula kepada kami dan kepada seluruh hamba Allah yang shalih. Aku bersaksi bahwa tidak ada sesembahan yang berhak disembah melainkan Allah, dan aku bersaksi bahwa Muhammad itu adalah utusan Allah. Ya Allah aku sampai shalawat kepada junjungan kita Nabi Muhammad, serta kepada keluarganya. Sebagaimana Engkau sampaikan shalawat kepada Nabi Ibrahim As., serta kepada para keluarganya. Dan, berikanlah keberkahan kepada junjungan kita Nabi Muhammad, serta kepada keluarga. Sebagaimana, Engkau telah berkahi kepada junjungan kita Nabi Ibrahim, serta keberkahan yang dilimpahkan kepada keluarga Nabi Ibrahim. Di seluruh alam raya ini, Engkaulah Yang Maha Terpuji lagi Maha Kekal.';
				$this->data['judul'] = 'Doa Tasyahud Akhir';
				$this->data['sound'] = base_url('assets/audio/tahiyat_akhir.mp3');
				break;
			default:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
		}
		$this->load->view('detil_bacaan_sholat', $this->data);
	}

	function detil_setelah_sholat()
	{
		switch ($this->id) {
			case 1:
				$this->data['lafadz'] = 'اللَّهُمَّ اغْفِرْ لِى وَلِوَ الِدَىَّ وَارْ حَمْهُمَا كَمَا رَبَّيَا نِى صَغِيْرًا';
				$this->data['arti'] = 'Ya Allah, ampunilah semua dosa-dosaku dan dosa-dosa kedua orang tuaku, serta berbelaskasihlah kepada mereka berdua seperti mereka berbelas kasih kepada diriku di waktu aku kecil.';
				$this->data['judul'] = 'Doa Kedua Orang Tua';
				$this->data['sound'] = base_url('assets/audio/orangtua.mp3');
				break;

			case 2:
				$this->data['lafadz'] = 'رَبَّنَا آَتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الْآَخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ';
				$this->data['arti'] = 'Ya Rabb kami, limpahkanlah kepada kami kebaikan di dunia dan kebaikan di akhirat serta peliharalah kami dari siksa neraka';
				$this->data['judul'] = 'Doa Selamat Dunia Akhirat';
				$this->data['sound'] = base_url('assets/audio/dunia_akhirat.mp3');
				break;

			default:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
		}
		$this->load->view('detil_doa_setelah_sholat', $this->data);
	}

	function detil_dzikir()
	{
		switch ($this->id) {
			case 1:
				$this->data['lafadz'] = 'أَصْبَحْنَا وَأَصْبَحَ الْمُلْكُ لِلَّهِ، وَالْحَمْدُ لِلَّهِ، لاَ إِلَـهَ إِلاَّ اللهُ وَحْدَهُ لاَ شَرِيْكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيْرُ. رَبِّ أَسْأَلُكَ خَيْرَ مَا فِيْ هَذَا الْيَوْمِ وَخَيْرَ مَا بَعْدَهُ، وَأَعُوْذُ بِكَ مِنْ شَرِّ مَا فِيْ هَذَا الْيَوْمِ وَشَرِّ مَا بَعْدَهُ، رَبِّ أَعُوْذُ بِكَ مِنَ الْكَسَلِ وَسُوْءِ الْكِبَرِ، رَبِّ أَعُوْذُ بِكَ مِنْ عَذَابٍ فِي النَّارِ وَعَذَابٍ فِي الْقَبْرِ';
				$this->data['arti'] = '“Kami telah memasuki waktu pagi dan kerajaan hanya milik Allah, segala puji hanya milik Allah. Tidak ada ilah yang berhak diibadahi dengan benar kecuali Allah Yang Maha Esa, tiada sekutu bagi-Nya. Bagi-Nya kerajaan dan bagi-Nya pujian. Dia-lah Yang Mahakuasa atas segala sesuatu. Wahai Rabb, aku mohon kepada-Mu kebaikan di hari ini dan kebaikan sesudahnya. Aku berlindung kepada-Mu dari kejahatan hari ini dan kejahatan sesudahnya. Wahai Rabb, aku berlindung kepada-Mu dari kemalasan dan kejelekan"';
				$this->data['judul'] = 'Dzikir Pagi';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
			case 2:
				$this->data['lafadz'] = 'أَصْبَحْنَا وَأَصْبَحَ الْمُلْكُ لِلَّهِ، وَالْحَمْدُ لِلَّهِ، لاَ إِلَـهَ إِلاَّ اللهُ وَحْدَهُ لاَ شَرِيْكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيْرُ. رَبِّ أَسْأَلُكَ خَيْرَ مَا فِيْ هَذَا الْيَوْمِ وَخَيْرَ مَا بَعْدَهُ، وَأَعُوْذُ بِكَ مِنْ شَرِّ مَا فِيْ هَذَا الْيَوْمِ وَشَرِّ مَا بَعْدَهُ، رَبِّ أَعُوْذُ بِكَ مِنَ الْكَسَلِ وَسُوْءِ الْكِبَرِ، رَبِّ أَعُوْذُ بِكَ مِنْ عَذَابٍ فِي النَّارِ وَعَذَابٍ فِي الْقَبْرِ';
				$this->data['arti'] = '“Kami telah memasuki waktu pagi dan kerajaan hanya milik Allah, segala puji hanya milik Allah. Tidak ada ilah yang berhak diibadahi dengan benar kecuali Allah Yang Maha Esa, tiada sekutu bagi-Nya. Bagi-Nya kerajaan dan bagi-Nya pujian. Dia-lah Yang Mahakuasa atas segala sesuatu. Wahai Rabb, aku mohon kepada-Mu kebaikan di hari ini dan kebaikan sesudahnya. Aku berlindung kepada-Mu dari kejahatan hari ini dan kejahatan sesudahnya. Wahai Rabb, aku berlindung kepada-Mu dari kemalasan dan kejelekan"';
				$this->data['judul'] = 'Dzikir Petang';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
			case 3:
				$this->data['lafadz'] = 'بِسْمِكَ اللّهُمَّ اَحْيَا وَ بِسْمِكَ اَمُوْتُ';
				$this->data['arti'] = 'Dengan nama-Mu ya Allah aku hidup, dan dengan nama-Mu aku mati';
				$this->data['judul'] = 'Doa Sebelum Tidur';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			default:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
		}
		$this->load->view('detil_dzikir_pilihan', $this->data);
	}

	function detil_juz_amma()
	{
		$this->data['surat'] = $this->id;
		$this->load->view('detil_juz_amma', $this->data);
	}

	function generator()
	{
		$this->load->view('generator');
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */