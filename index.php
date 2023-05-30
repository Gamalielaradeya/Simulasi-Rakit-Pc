<!DOCTYPE html>
<html class="max-w-[100%]" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="ok_m9XmI1JV1hck8vU1WgzVIQuNIf8AIxtvtHVt1tnU" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Rakit PC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-[100%] overflow-x-hidden font-['Poppins']">
    <div class="bg-yellow-400">
        <div class="container">
            <div class="text-slate-900 pl-4  md:px-24 py-3">
                <p>Simulasi Rakit PC, Saran PC Bisa >> (085172476678)</p>
            </div>
        </div>
    </div>

    <nav class="bg-slate-50 border-b-2 border-slate-500 " id="navbar">
        <div class=" flex flex-row justify-between items-center py-2 px-4 md:px-24">
            <a class="flex" href="">
                <img class="rounded-full h-auto max-w-[60px] border-black border-2" src="asset/logo.jpg" alt="logo">
            </a>
            <div class="text-2xl font-semibold">
                <a href="">
                <span>Github</span>
                </a>
            </div>
        </div>
    </nav>

    
        <div id="header" class="container h-20 md:py-16 flex justify-center items-center ">
            <div class="text-3xl font-medium ">
                <h3 class="">Simulasi Rakitan</h3>
            </div>
        </div>

        <div class="pt-4  items-center text-sm text-black font-normal">
            <div class="container">
                <div>
                    <?php
                        require_once "asset/koneksi/koneksi.php";
                        $tanggalupdate = mysqli_query($connect, "SELECT * FROM tanggalupdate");
                        while($row=mysqli_fetch_array($tanggalupdate)) {
                    ?>
                    <!--<p>Update Harga: <?php echo $row['tanggal'];?></p>-->
                    <?php
                            }
                            ?>
                </div>
            </div>
        </div>
    

    <div class="pb-14" id="mainpage">
        <div class="w-full">

            <!-- Buat Brand -->
            <div class="flex flex-col md:flex-row md:px-24 px-4 space-y-2 ">
                <div class="md:w-2/12 font-medium mt-1 flex items-center ">
                    <p>Brand</p>
                </div>
                <div class="md:w-7/12 ">
                    <select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" name="" id="brand-dropdown">
                    <option value="0">Pilih Brand</option>
                    <?php
						
						require_once "asset/koneksi/koneksi.php";;
						$brand = mysqli_query($connect, "SELECT * FROM brand");
						while($row =mysqli_fetch_array($brand)) {
						?>
						<option value="<?php echo $row['id'];?>"><?php echo $row['brand'];?></option>
						<?php
						}
						?>	

                    </select>
                    <input name="name1" id="nex1" type="hidden" value="0">
                </div>
            </div>




            <!-- Buat Socket -->
            <div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
                    <p>Socket</p>
                </div>
                <div class="md:w-7/12">
                    <select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%] " name="" id="brand-dropdown">
                    <option value="0">Pilih Brand Dahulu</option>
                    </select>
                    <input name="name1" id="nex1" type="hidden" value="0">
                </div>
            </div>




            <!-- Buat processor part ke 1 -->
            <div class="flex flex-col md:flex-row md:mx-20  px-4 space-y-2 ">
                <div class="md:w-2/12 font-medium mt-1 flex items-center ">
                    <p>Processor</p>
                </div>
                <div class="md:w-7/12 ">
                    <select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%] " name="n1" id="s1"
                    onchange="updateHargax(this,document.getElementById('q1'),document.getElementById('p1'),document.getElementById('nex1'))">
                    <option value="0">Pilih Socket Dahulu</option>
                    </select>
                    <input name="name1" id="nex1" type="hidden" value="0">
                </div>
                <div class="md:w-1/12 md:pl-5">
                    <select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty1" id="q1"
						onchange="updateHarga(this.value, document.getElementById('s1'),document.getElementById('p1'))">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
                </div>
                <div class="md:w-2/12 md:pl-5">
                    <input id="p1" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>


            <!-- Buat motherboard part ke 2 -->
            <div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
                    <p>Motherboard</p>
                </div>
                <div class="md:w-7/12">
                    <select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n2" id="s2"
                    onchange="updateHargax(this,document.getElementById('q2'),document.getElementById('p2'),document.getElementById('nex2'))">
                    <option value="0">Pilih Socket Dahulu</option>
                    </select>
                    <input name="name2" id="nex1" type="hidden" value="0">
                </div>
                <div class="md:w-1/12 md:pl-5">
                    <select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty2" id="q2"
						onchange="updateHarga(this.value, document.getElementById('s2'),document.getElementById('p2'))">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
                </div>
                <div class="md:w-2/12 md:pl-5">
                    <input id="p2" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>


            <!-- Harddisk 3-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Harddisk</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n3" id="s3"
						onchange="updateHargax(this,document.getElementById('q3'),document.getElementById('p3'),document.getElementById('nex3'))">
						<option value="0">Pilih Harddisk</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$harddisk = mysqli_query($connect, "SELECT * FROM harddisk");
						while($row=mysqli_fetch_array($harddisk)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name3" id="nex3" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
                    <select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty3" id="q3"
						onchange="updateHarga(this.value, document.getElementById('s3'),document.getElementById('p3'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p3" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- RAM 4-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>RAM</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n4" id="s4"
						onchange="updateHargax(this,document.getElementById('q4'),document.getElementById('p4'),document.getElementById('nex4'))">
						<option value="0">Pilih RAM</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$ram = mysqli_query($connect, "SELECT * FROM ram");
						while($row=mysqli_fetch_array($ram)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name4" id="nex4" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty4" id="q4"
						onchange="updateHarga(this.value, document.getElementById('s4'),document.getElementById('p4'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p4" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- SSD 5-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>SSD</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n5" id="s5"
						onchange="updateHargax(this,document.getElementById('q5'),document.getElementById('p5'),document.getElementById('nex5'))">
						<option value="0">Pilih SSD</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$ssd = mysqli_query($connect, "SELECT * FROM ssd");
						while($row=mysqli_fetch_array($ssd)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name5" id="nex5" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty5" id="q5"
						onchange="updateHarga(this.value, document.getElementById('s5'),document.getElementById('p5'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p5" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- VGA 6-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>VGA</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n6" id="s6"
						onchange="updateHargax(this,document.getElementById('q6'),document.getElementById('p6'),document.getElementById('nex6'))"
						style="font-size: medium;">
						<option value="0">Pilih VGA</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$vga = mysqli_query($connect, "SELECT * FROM vga");
						while($row=mysqli_fetch_array($vga)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name6" id="nex6" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty6" id="q6"
						onchange="updateHarga(this.value, document.getElementById('s6'),document.getElementById('p6'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p6" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- PSU 7-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Power Supply
					</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n7" id="s7"
						onchange="updateHargax(this,document.getElementById('q7'),document.getElementById('p7'),document.getElementById('nex7'))"
						style="font-size: medium;">
						<option value="0">Pilih Power Supply</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$psu = mysqli_query($connect, "SELECT * FROM psu");
						while($row=mysqli_fetch_array($psu)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name7" id="nex7" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty7" id="q7"
						onchange="updateHarga(this.value, document.getElementById('s7'),document.getElementById('p7'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p7" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- Casing 8-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Casing</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n8" id="s8"
						onchange="updateHargax(this,document.getElementById('q8'),document.getElementById('p8'),document.getElementById('nex8'))"
						style="font-size: medium;">
						<option value="0">Pilih Casing</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$casing = mysqli_query($connect, "SELECT * FROM casing");
						while($row=mysqli_fetch_array($casing)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name8" id="nex8" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty8" id="q8"
						onchange="updateHarga(this.value, document.getElementById('s8'),document.getElementById('p8'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p8" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- Keyboard 9-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Keyboard</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n9" id="s9"
						onchange="updateHargax(this,document.getElementById('q9'),document.getElementById('p9'),document.getElementById('nex9'))"
						style="font-size: medium;">
						<option value="0">Pilih Keyboard</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$keyboard = mysqli_query($connect, "SELECT * FROM keyboard");
						while($row=mysqli_fetch_array($keyboard)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name9" id="nex9" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty9" id="q9"
						onchange="updateHarga(this.value, document.getElementById('s9'),document.getElementById('p9'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p9" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- mouse 10-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Mouse</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n10" id="s10"
						onchange="updateHargax(this,document.getElementById('q10'),document.getElementById('p10'),document.getElementById('nex10'))"
						style="font-size: medium;">
						<option value="0">Pilih Mouse</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$mouse = mysqli_query($connect, "SELECT * FROM mouse");
						while($row=mysqli_fetch_array($mouse)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name10" id="nex10" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty10" id="q10"
						onchange="updateHarga(this.value, document.getElementById('s10'),document.getElementById('p10'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p10" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- monitor 11-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Monitor</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n11" id="s11"
						onchange="updateHargax(this,document.getElementById('q11'),document.getElementById('p11'),document.getElementById('nex11'))"
						style="font-size: medium;">
						<option value="0">Pilih Monitor</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$monitor = mysqli_query($connect, "SELECT * FROM monitor");
						while($row=mysqli_fetch_array($monitor)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name11" id="nex11" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty11" id="q11"
						onchange="updateHarga(this.value, document.getElementById('s11'),document.getElementById('p11'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p11" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- CPU Cooler 12-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>CPU Cooler</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n12" id="s12"
						onchange="updateHargax(this,document.getElementById('q12'),document.getElementById('p12'),document.getElementById('nex12'))"
						style="font-size: medium;">
						<option value="0">Pilih CPU Cooler</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$cpucooler = mysqli_query($connect, "SELECT * FROM cpucooler");
						while($row=mysqli_fetch_array($cpucooler)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name12" id="nex12" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty12" id="q12"
						onchange="updateHarga(this.value, document.getElementById('s12'),document.getElementById('p12'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p12" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- Fan 13-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Fan</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n13" id="s13"
						onchange="updateHargax(this,document.getElementById('q13'),document.getElementById('p13'),document.getElementById('nex13'))"
						style="font-size: medium;">
						<option value="0">Pilih Fan</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$coolerfan = mysqli_query($connect, "SELECT * FROM fan");
						while($row=mysqli_fetch_array($coolerfan)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name13" id="nex13" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty13" id="q13"
						onchange="updateHarga(this.value, document.getElementById('s13'),document.getElementById('p13'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p13" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- Ups 14-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Ups</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n14" id="s14"
						onchange="updateHargax(this,document.getElementById('q14'),document.getElementById('p14'),document.getElementById('nex14'))"
						style="font-size: medium;">
						<option value="0">Pilih Ups</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$ups = mysqli_query($connect, "SELECT * FROM ups");
						while($row=mysqli_fetch_array($ups)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name14" id="nex14" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty14" id="q14"
						onchange="updateHarga(this.value, document.getElementById('s14'),document.getElementById('p14'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p14" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>

            <!-- Headset 15-->
			<div class="flex flex-col md:flex-row md:mx-20 px-4 space-y-2 ">
                <div class="md:w-2/12 font-medium mt-1 flex items-center">
					<p>Headset</p>
				</div>
				<div class="md:w-7/12">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="n15" id="s15"
						onchange="updateHargax(this,document.getElementById('q15'),document.getElementById('p15'),document.getElementById('nex15'))"
						style="font-size: medium;">
						<option value="0">Pilih Headset</option>
						<?php
						require_once "asset/koneksi/koneksi.php";;
						$headset = mysqli_query($connect, "SELECT * FROM headset");
						while($row=mysqli_fetch_array($headset)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name15" id="nex15" type="hidden" value="0">
				</div>
				<div class="md:w-1/12 md:pl-5">
					<select class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" name="qty15" id="q15"
						onchange="updateHarga(this.value, document.getElementById('s15'),document.getElementById('p15'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="md:w-2/12 md:pl-5">
					<input id="p15" class="border border-gray-300 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-[100%]" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>


        </div>
    </div>
    
	<div class=" bg-yellow-400 w-full">
		<div class="flex flex-col justify-center items-center p-2">
			<span>Simulasi Rakit PC Gamaliel</span>
			<span>Created Using HTML,CSS,JavaScript and PHP</span>
		</div>
	</div>

    <script>
		$(document).ready(function () {
			$('#brand-dropdown').on('change', function () {
				var brand_id = this.value;
				$.ajax({
					url: "code/socket.php",
					type: "POST",
					data: {
						brand_id: brand_id
					},
					cache: false,
					success: function (result) {
						$("#socket-dropdown").html(result);
						$('#s1').html('<option value="0">Pilih Socket Dahulu</option>');
						$('#s2').html('<option value="0">Pilih Socket Dahulu</option>');
					}
				});
			});
			$('#socket-dropdown').on('change', function () {
				var socket_id = this.value;
				$.ajax({
					url: "code/prosessor.php",
					type: "POST",
					data: {
						socket_id: socket_id
					},
					cache: false,
					success: function (result) {
						$("#s1").html(result);
					}
				});
			});
			$('#socket-dropdown').on('change', function () {
				var socket_id = this.value;
				$.ajax({
					url: "code/motherboard.php",
					type: "POST",
					data: {
						socket_id: socket_id
					},
					cache: false,
					success: function (result) {
						$("#s2").html(result);
					}
				});
			});
		});
	</script>

	<!-- JavaScript Rakitan -->
	<script type="text/javascript">
		function digit_grouping(nStr) {
			nStr += '';
			x = nStr.split(',');
			x1 = x[0];
			x2 = x.length > 1 ? '.' + x[1] : '';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + '.' + '$2');
			}
			return x1 + x2;
		}

		function removeCommas(nStr) {
			return nStr.replace('.', '');
		}

		function updateHargax(obj, qty, prc, nm) {
			prc.value = qty.value * obj.value;
			nm.value = obj.options[obj.selectedIndex].text;
			var tot = document.getElementById('totalx').value;
			var totali = 0;
			for (i = 1; i <= tot; i++) {
				totali = totali + parseInt(removeCommas(document.getElementById('p' + i).value));
			}
			document.getElementById('totali').value = totali;
			document.getElementById('totali').value = digit_grouping(document.getElementById('totali').value);
		}

		function updateHarga(obj, qty, prc) {
			prc.value = qty.value * obj;
			var tot = document.getElementById('totalx').value;
			var totali = 0;
			for (i = 1; i <= tot; i++) {
				totali = totali + parseInt(removeCommas(document.getElementById('p' + i).value));
			}
			document.getElementById('totali').value = totali;
			document.getElementById('totali').value = digit_grouping(document.getElementById('totali').value);
		}

		function getData() {
			var i, j, k;
			var name, prc, qty;
			name = "";
			prc = "";
			qty = "";
			for (i = 1; i < 41; i++) {
				if (document.getElementById("s" + i).selectedIndex != 0) {
					name = name + "name[]=" + document.getElementById("s" + i).options[document.getElementById("s" + i)
						.selectedIndex].text + "&";
					qty = qty + "qty[]=" + document.getElementById("q" + i).value + "&";
					prc = prc + "prc[]=" + document.getElementById("s" + i).options[document.getElementById("s" + i)
						.selectedIndex].id + "&";
				}
				document.getElementById("linker").href = "print.php?" + name + qty + prc;
			}
		}
	</script>

</body>
</html>