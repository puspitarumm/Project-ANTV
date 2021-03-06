
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="inc/mdia.css">
<link rel="stylesheet" type="text/css" href="inc/popupmenu.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="inc/popupmenu.js"></script>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 3px 3px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 3px 0px 0px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	float:right;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 1px solid #cc0000;
}
.button3:hover {
    background-color: #cc0000;
    color: white;
}
.button3.kiri {
    margin-right: 0px !important;
}

.button2 {
    background-color: #cc0000; 
    color: white; 
    border: 1px solid #cc0000;
}

.button2.kiri {
    margin-right: 0px !important;
}


</style>    

</head>

<body>
<div id="wrapper">
	<div id="header">
		
		<div id="share">
			<a href="../EN/index.php"><button class="button button3">EN</button></a>
            <a href="#"><button class="button button2 kiri">ID</button></a>
		</div>
	</div>
    <div id="top-menu">
		<div id="navigasi">
        
			<a href="index.php">Halaman Utama</a>
			<a href="#" data-popupmenu="popmenu1">Tentang Kami</a>
			<a href="#" data-popupmenu="popmenu2">Hubungan Investor</a>
			<a href="#" data-popupmenu="popmenu3">Tata Kelola Perusahaan</a>
			<a href="galeri2.php">Tanggung Jawab Sosial</a>
            <a href="kontak.php">Kontak</a>
            <a href="http://www.an.tv/career">Karir</a>

            <!--HTML for popup Menu 1-->
            <ul id="popmenu1" class="jqpopupmenu">
            	<li><a href="profil_perusahaan.php">Profil Perusahaan</a></li>
                 <li><a href="#">Manajemen</a>
                    <ul>
					 <li><a href="sambutan_direktur_utama.php">Sambutan Direktur Utama</a></li>
                    <li><a href="dewan_komisaris.php">Dewan Komisaris</a></li>
                    <li><a href="dewan_direksi.php">Direksi</a></li>
                    </ul>
                 </li>
           		 
                <li><a href="struktur-organisasi.php">Struktur Organisasi Perusahaan</a></li>
                <li><a href="struktur-group.php">Struktur Grup Perusahaan</a></li>
                <li><a href="bisnis.php">Bisnis</a></li>
                <li><a href="penghargaan.php">Penghargaan dan Sertifikasi</a></li>
                <li><a href="lembaga_profesi.php">Lembaga Profesi dan Penunjang Pasar Modal</a></li>
            </ul>
            
            <!--HTML for popup Menu 2-->
            <ul id="popmenu2" class="jqpopupmenu">
            <li><a href="Corporate_Fact_Sheet.php">Lembar Fakta Perusahaan</a></li>
					<li><a href="laporan_tahunan.php">Laporan Tahunan</a></li>
                    <li><a href="#">Informasi Keuangan</a>
                         	<ul style="padding-left:20px;">
                               <li><a href="Hubungan Investor/Financial-Highlights-MDIA-2016-website.pdf">Ikhtisar Keuangan MDIA<i class="caret"></i></a></li>
                                <li><a href="informasi_keuangan.php">Laporan Keuangan</a></li>
                             </ul>
                                   
                    </li>
						<li><a href="presentasi_press_release.php">Presentasi dan Siaran Pers</a></li>
						<li><a href="prospektus.php">Prospektus</a></li>
                        <li><a href="struktur_pemegang_saham.php">Struktur Pemegang Saham</a></li>
                        <li><a href="informasi_saham.php">Informasi Saham</a></li>
                    	<li><a href="dividen.php">Dividen</a></li>                        
						<li><a href="rups.php">RUPS</a></li>
						<li><a href="paparanpublik.php">Paparan Publik</a></li>
            </ul>
            
            <!--HTML for popup Menu 3-->
            <ul id="popmenu3" class="jqpopupmenu">
            
            <li><a href="#">Perangkat Tata Kelola</a>
                <ul>
				<li><a href="komite_audit.php">Komite Audit</a></li>
				<li><a href="komite_nominasi_remunerasi.php">Komite Nominasi dan Remunerasi</a></li>
                <li><a href="komite_manajemen_resiko.php">Komite Manajemen Resiko</a></li>
				<li><a href="sekretaris_perusahaan.php">Sekretaris Perusahaan</a></li>
                <li><a href="unit_audit_internal.php">Unit Audit Internal</a></li>                 
                </ul>
            </li>
            <li><a href="#">Dokumen Tata Kelola</a>
                <ul>
                <li><a href="Tata Kelola Perusahaan/Anggaran-Dasar-IMC.pdf">Anggaran Dasar</a></li>
				<li><a href="Tata Kelola Perusahaan/Pedoman-Kerja-BoC_MDIA_2017_Final-5april.pdf">Pedoman Kerja Dewan Komisaris</a></li>
                <li><a href="Tata Kelola Perusahaan/2017/Pedoman_Kerja_DIREKSI_2017.pdf">Pedoman Kerja Direksi</a></li>
                <li><a href="Tata Kelola Perusahaan/Kode_Etik(code_of_conduct)_IMC_2017.pdf">Kode Etik</a></li>
				<li><a href="Tata Kelola Perusahaan/Piagam-Komite-Audit-IMC.pdf">Piagam Komite Audit</a></li>
				<li><a href="Tata Kelola Perusahaan/Pedoman-Komite-Nominasi-Remunerasi_IMC.pdf">Pedoman Komite Nominasi dan Remunerasi</a></li>
                <li><a href="Tata Kelola Perusahaan/Piagam-Audit-Internal-IMC.pdf">Piagam Unit Audit Internal</a></li>
                <li><a href="Tata Kelola Perusahaan/WBS_ IMC.pdf">Piagam WBS</a></li>
				<li><a href="Tata Kelola Perusahaan/2017/KEBIJAKAN_PEMEGANG_SAHAM_2017.pdf">Kebijakan Komunikasi Pemegang Saham</a></li>
                </ul>
            </li>
            </ul>
    	</div> <!--end navigasi-->
	</div> <!-- end top menu-->
    
</div> <!--end wrapper-->  