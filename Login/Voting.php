<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting</title>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}

		.navigasi{
			position: absolute;
			width: 1440px;
			height: 209px;
			left: -176px;
			top: -17px;
			background: linear-gradient(180deg, rgba(169, 170, 110, 0.6) 3.84%, rgba(212, 188, 123, 0.6) 22.89%, rgba(240, 195, 133, 0.6) 42.4%, rgba(169, 170, 110, 0) 100%);
			background-repeat: no-repeat;}
			
		.tittle{
			position: absolute;
			left: 230px;
			top: 50px;
			font-size: 15px;
		}
		.crop{
			position: absolute;
			width: 110px;
			height: 68px;
			left: 20px;
			top: 20px;
			
		}
		.container .search{

			position: absolute;
			width: 460px;
			height: 54px;
			left: 424px;
			top: 50px;
			background: rgba(238, 238, 238, 0.8) url(search.png) left no-repeat;
			border-radius: 30px;
			border: none;
		}
		
		
		.navigasi .list ul{
			position: absolute;
			list-style: none;
			width: 800px;
			height: 28px;
			left:980px;
			top: 65px;
			
		}
		.navigasi .list ul li a{
			float: left;
			width: 100px;
			font-size: 15px;
			text-align: center;
			cursor: pointer;
			text-decoration: none;
			color: black;
		}
		.navigasi ul li a:hover{
			color: #fff;
		}
		.tittle-2 h1{
			position: absolute;
			width: 981px;
			height: 70px;
			left: 41px;
			top: 234px;
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			font-size: 60px;
			line-height: 70px;
			color: #000000;
		}
		.aldy{
			position: absolute;
			width: 293px;
			height: 432px;
			left: 67px;
			top: 419px;
			background: #FFFFFF;
			border: 1px solid rgba(0, 0, 0, 0.14);
			box-sizing: border-box;
			border-radius: 10px;
		}
		.aldy .ald{
			position: absolute;
			width: 170px;
			height: 262px;
			left: 68px;
			top: 30px;
		}
		.aldy .aldy-input{
			cursor: pointer;
			position: absolute;
			width: 175px;
			height: 60px;
			left: 68px;
			top: 324px;
			border-radius: 10px;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			line-height: 35px;
			color: #ffff;
			background: rgba(250, 137, 33, 0.6);
			border-radius: 8px;
			border: none;}
			.aldy .aldy-input:hover{
			background: rgba(255, 255, 255, 0.6);
			border: 1px solid #FA8921;
			box-sizing: border-box;
			border-radius: 10px;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			line-height: 35px;
			color: #FA8921;
			}
			.opsi{
			position: absolute;
			width: 24px;
			height: 24px;
			left: 261px;
			top: 400px;
	}
			
			.zaky{
			position: absolute;
			width: 293px;
			height: 432px;
			left: 383px;
			top: 419px;
			background: #FFFFFF;
			border: 1px solid rgba(0, 0, 0, 0.14);
			box-sizing: border-box;
			border-radius: 10px;
		}
			.zaky .zak{
			position: absolute;
			width: 170px;
			height: 262px;
			left: 68px;
			top: 30px;
		}
			.zaky .zaky-input{
			cursor: pointer;
			position: absolute;
			width: 175px;
			height: 60px;
			left: 68px;
			top: 324px;
			border-radius: 10px;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			line-height: 35px;
			color: #ffff;
			background: rgba(250, 137, 33, 0.6);
			border-radius: 8px;
			border: none;}

			.zaky .zaky-input:hover{
			background: rgba(255, 255, 255, 0.6);
			border: 1px solid #FA8921;
			box-sizing: border-box;
			border-radius: 10px;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			line-height: 35px;
			color: #FA8921;
			}

			.ayu{
			position: absolute;
			width: 293px;
			height: 432px;
			left: 698px;
			top: 419px;
			background: #FFFFFF;
			border: 1px solid rgba(0, 0, 0, 0.14);
			box-sizing: border-box;
			border-radius: 10px;
		}
			.ayu .ay{
			position: absolute;
			width: 170px;
			height: 236.67px;
			left: 68px;
			top: 40px;
		}
			.ayu .ayu-input{
			cursor: pointer;
			position: absolute;
			width: 175px;
			height: 60px;
			left: 68px;
			top: 324px;
			border-radius: 10px;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			line-height: 35px;
			color: #ffff;
			background: rgba(250, 137, 33, 0.6);
			border-radius: 8px;
			border: none;}

			.ayu .ayu-input:hover{
			background: rgba(255, 255, 255, 0.6);
			border: 1px solid #FA8921;
			box-sizing: border-box;
			border-radius: 10px;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			line-height: 35px;
			color: #FA8921;
			}
			p{
				position: absolute;
				width: 34px;
				height: 35px;
				left: 245px;
				top: 15px;

				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 30px;
				line-height: 35px;

				color: rgba(250, 137, 33, 0.5);
			}
			.triangel a{
				cursor: pointer;
				position: absolute;
				width: 0px;
				height: 0px;
				border-top: solid 50px rgba(255, 0, 0, 0.8);
				border-bottom:solid 50px transparent; 
				border-right: solid 50px transparent;
				left: 1150.81px;
				top: 883.87px;
				transform: rotate(133.00deg);}

			

	</style>
</head>
<body>
	
	<div class="navigasi">
	
		<div class="tittle">
<h1 class="hore">Hore</h1>
<h1 class="crop">Corp.</h1></div>
<div class="container">
	<input type="search" name="search" class="search" placeholder="             Cari">
	
</div>
	<div class="list">
	<ul>
		<li><a href="">Halaman Utama<a/></li>
		<li><a href="">Informasi<a/></li>
		<li><a href="" >Alur</a></li>
		<li><a href="">Kontak</a></li>
	</ul>
	</div>
</div>
	<div class="tittle-2">
		<h1>Daftar Pemilihan Calon Ketua HIMA</h1>
	</div>
	<div class="aldy">
		<p>01</p>
		<img src="opsi.png" class="opsi">
		<img src="aldy.png" class="ald">
		<input type="submit" name="aldy" value="Aldy" class="aldy-input">
	</div>
	<div class="zaky">
		<p>02</p>
		<img src="opsi.png" class="opsi">
		<img src="zaky.png" class="zak">
		<input type="submit" name="zaky" value="Zaky" class="zaky-input">
	</div>
	<div class="ayu">
		<p>03</p>
		<img src="opsi.png" class="opsi">
		<img src="Ayu.png" class="ay">
		<input type="submit" name="ayu" value="Ayu" class="ayu-input">
	</div>
	<form name="form1" method="post" action="pemilihanv.php"></form>
	<div class="triangel">
		<a href="hasilv.php" onclick="Swal.fire('Succces','Anda Telah Menggunakan Hak Suara','success')"></a>
	</div>
	    <script src="js/sweetalert2.all.min.js"></script> 
	    
</body>
</html>