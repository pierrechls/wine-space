<?php

	if($_POST["Envoyer"]==""){
		if(!empty($_POST['nom_c']) && !empty($_POST['email_c']) && !empty($_POST['message_c'])){
			
			$mailDestinataire= "henrip009@gmail.com";
			$titleWebsite = get_bloginfo('name');
			$themeURL = get_bloginfo('template_url');
			
			$email = addslashes($_POST['email_c']);
			$nom = addslashes($_POST['nom_c']);
			$sujet = "Prise de contact - Via formulaire de contact du site " . $titleWebsite ;
			$ipsender = $_SERVER['REMOTE_ADDR'];

			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)){
				$passage_ligne = "\r\n";
			}
			else
			{
				$passage_ligne = "\n";
			}
			
			$message_txt .= "Nom : ".$nom."\r\n";
			$message_txt .= "Adresse email : ".$email."\r\n";
			$message_txt .= "IP de l'auteur : ".$ipsender."\r\n";
			$message_txt .= "----------------------------------- \r\n";
			$message_txt .= "Message : ".$_POST['message_c']."\r\n";

			$message_html = "<html><head><link rel='stylesheet' href='". $themeURL ."/css/style.css'></head><style>.im{color:#606161 !important;}span.im {color: red !important;}</style><body style='color:#606161'><div style='background-color:#f5f5f5;margin:0;padding:70px 0 70px 0;width:100%'><img src='". $themeURL ."/images/logo.png' alt='". $titleWebsite ."' style='border:none;display:block; margin:auto; margin-bottom:70px;font-size:14px;font-weight:bold;min-height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize'><h1 style='color:#ffffff;background-color:#b7a56d;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:20px;font-weight:300;line-height:150%;margin:0;padding:36px 48px;text-align:left'>Vous avez reçu un mail depuis le formulaire contact du site ". $titleWebsite ." de la part de <strong>".$nom."</strong>.</h1><h2 style='color:#b7a56d;display:block;padding: 36px 48px;font-family:Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left'>Détails de l'expéditeur: </h2><h4 style='padding: 0px 48px;'><strong>Nom : </strong>".$nom."<br/><strong>Adresse email : </strong><a style='color:#606161' href='".$email."' target='_blank'>".$email."</a><br /><strong>IP de l'auteur : </strong>".$ipsender."<br /></h4><p style='margin-top:20px; padding: 0px 48px; text-align:justify;'>".nl2br(htmlspecialchars($_POST['message_c']))."</p><p style='padding: 48px 0 0 0px; border: 0; color: #c7bb88;font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;'>". $titleWebsite ."</p></div></body></html>";
			
			$boundary = "-----=".md5(rand());
			
			$header = "From: \"".$nom."\" <".$email.">".$passage_ligne;
			$header.= "Reply-to: \"".$nom."\" <".$email.">".$passage_ligne;
			$header.= "MIME-Version: 1.0".$passage_ligne;
			$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
			
			$message = $passage_ligne."--".$boundary.$passage_ligne;
			$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
			$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
			$message.= $passage_ligne.$message_txt.$passage_ligne;
			$message.= $passage_ligne."--".$boundary.$passage_ligne;
			
			$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
			$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
			$message.= $passage_ligne.$message_html.$passage_ligne;
			$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
			$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
			
			if (mail($mailDestinataire,$sujet,$message,$header)) {
				$_SESSION["messagesend"] = "1";
			} else {
				$_SESSION["messagesend"] = "0";
			}
		}
	}
?>
