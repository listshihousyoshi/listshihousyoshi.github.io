<！-- このソースコードでは省略しているが、送られてきた情報をチェックするための処理を入れる入力に適さない情報を受け取った時にエラーを表示して正の整数による入力を促す。入力チェックはif分や関数をっ組み合わせるっことで実装する。-->
<?php
	function bmi($height,$mass){
		$height = $height / 100;
		$mass = $mass / ($height * $height)
		return $mass;
	}
	function h($str){
		return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
	}
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>お申込み専用フォーム</title>
	</head>
	<body>
		<?php
			if(isst($_POST["submit"])){
				$bmi = bmi($POST["height"],$POST["mass"]);
				print "あなたのBMI値は".h($bmi)."です。";
			}else{
				print "BMI値を計算します。";
			}
		?>
		
		<form action="form.php" method="post">
			身長<br>
			<input type="text" name="height"><br>
			体重<br>
			<input type="text" name="mass"><br>
			<input type="submit" name="submit" value="送信"><br>
		</form>
	</body>
</html>
