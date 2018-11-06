<?php
// Pear library includes
// You should have the pear lib installed
require_once './vendor/autoload.php';

//Settings
$max_allowed_file_size = 5000; // size in KB
$allowed_extensions = array("pdf", "doc", "docx");
$upload_folder = './uploads/'; //<-- this folder must be writeable by the script
$your_email = 'dev@scalenepartners.com';//<<--  update this to your email address

$errors ='';

if(isset($_POST['submit']))
{
	//Get the uploaded file information
	$name_of_resume =  basename($_FILES['resume']['name']);
  $name_of_cover_letter = basename($_FILES['cover_letter']['name']);
	//get the file extension of the file
	$type_of_resume = substr($name_of_resume,
							strrpos($name_of_resume, '.') + 1);
  $type_of_cover_letter = substr($name_of_cover_letter,
              strrpos($name_of_cover_letter, '.') + 1);

	$size_of_resume = $_FILES["resume"]["size"]/1024;
  $size_of_cover_letter = $_FILES["cover_letter"]["size"]/1024;

	///------------Do Validations-------------
	if(empty($_POST['firstname'])||empty($_POST['email'])||empty($_POST['lastname']))
	{
		$errors .= "\n Name and Email are required fields. ";
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}

	if($size_of_resume > $max_allowed_file_size || $size_of_cover_letter > $max_allowed_file_size)
	{
		$errors .= "\n Size of file should be less than $max_allowed_file_size";
	}

	//------ Validate the file extension -----
	$allowed_ext = false;
	for($i=0; $i<sizeof($allowed_extensions); $i++)
	{
		if(strcasecmp($allowed_extensions[$i],$type_of_resume) == 0)
		{
			$allowed_ext = true;
		}
	}
  if ($allowed_ext == true)
  {
    $allowed_ext = false;
  	for($i=0; $i<sizeof($allowed_extensions); $i++)
  	{
  		if(strcasecmp($allowed_extensions[$i],$type_of_cover_letter) == 0)
  		{
  			$allowed_ext = true;
  		}
  	}
  }

	if(!$allowed_ext)
	{
		$errors .= "\n The uploaded file is not supported file type. ".
		" Only the following file types are supported: ".implode(',',$allowed_extensions);
	}

	//send the email
	if(empty($errors))
	{
		//copy the temp. uploaded file to uploads folder
		$path_of_resume = $upload_folder . $name_of_resume;
    $path_of_cover_letter = $upload_folder . $name_of_cover_letter;
		$resume_tmp_path = $_FILES["resume"]["tmp_name"];
    $cover_letter_tmp_path = $_FILES["cover_letter"]["tmp_name"];

		if(is_uploaded_file($resume_tmp_path))
		{
		    if(!copy($resume_tmp_path,$path_of_resume))
		    {
		    	$errors .= '\n error while copying the uploaded file';
		    }
		}

    if(is_uploaded_file($cover_letter_tmp_path))
		{
		    if(!copy($cover_letter_tmp_path,$path_of_cover_letter))
		    {
		    	$errors .= '\n error while copying the uploaded file';
		    }
		}
		//send the email
		$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
		$visitor_email = $_POST['email'];
		$user_message = $_POST['message'];
		$to = $your_email;
		$subject="New application form submission";
		$from = $your_email;
		$phone = $_POST['phone'];
		$text = "User $firstname $lastname has sent you this message: $user_message\n Phone #: $phone \n e-mail: $visitor_email";

		$transport = (new Swift_SmtpTransport('smtp.ionos.fr', 587, 'tls'))
		->setUsername('dev@scalenepartners.com')
		->setPassword('devscalene');

		$mailer = new Swift_Mailer($transport);

		$message = (new Swift_Message('New application received'))
  	->setFrom([$your_email => "$firstname $lastname"])
  	->setTo([$your_email => 'Dev Dev'])
  	->setBody($text)
		->setReplyTo($visitor_email)
		->attach(Swift_Attachment::fromPath($path_of_resume))
		->attach(Swift_Attachment::fromPath($path_of_cover_letter));

		$success = $mailer->send($message);

		$messageBody = file_get_contents('Assets/e-mail.html');
		$messageBody = str_replace("%name%", "$firstname $lastname", $messageBody);
		$messageBody = str_replace("%email%", $visitor_email, $messageBody);
		$messageBody = str_replace("%phone%", $phone, $messageBody);
		$messageBody = str_replace("%message%", $user_message, $messageBody);
		$messageBody = str_replace("%resume%", $path_of_resume, $messageBody);
		$messageBody = str_replace("%cover_letter%", $path_of_cover_letter, $messageBody);
		$message = (new Swift_Message('Application successfully sent'))
		->setFrom([$your_email => "Scalene Partners"])
		->setTo([$visitor_email => "$firstname $lastname"])
		->setBody($messageBody, 'text/html')
		->addPart('Thank you for applying, we will contact you soon.');

		$result = $mailer->send($message);
	}
}
///////////////////////////Functions/////////////////
// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta charset="utf-8">
    <meta author="Scalene Partners" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Scalene Partners | Fundraising advisory" />
    <title>Scalene Partners</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="./CSS/app.css">
    <link rel="stylesheet" href="./CSS/hover/hover.css">
    <link rel="stylesheet" href="./CSS/hover/hover.css.map">
    <link rel="stylesheet" href="./CSS/hover/hover-min.css">

    <link href="Assets/ico/ico144.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="Assets/ico/ico114.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="Assets/ico/ico72.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="Assets/ico/ico57.png" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="Assets/ico/ico.ico" rel="shortcut icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108837571-1"></script>
    <script language="JavaScript" src="JS/gen_validatorv31.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-108837571-1');

        document.addEventListener('DOMContentLoaded', () => {
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            if ($navbarBurgers.length > 0) {
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');
                    });
                });
            }
        });
    </script>
</head>

<body>
    <?php
  if(!empty($errors))
  {
  	echo nl2br($errors);
  }
  ?>
    <section class="hero is-fullheight join">
			<?php
			if ($success == TRUE)
			{
				echo '<div class="notification is-primary">
								<button class="delete"></button>
								Application successful, we will contact you soon.
							</div>';
		}
		?>
        <nav class="navbar is-transparent paddNavbar">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.html">
                    <img src="./Assets/Logo/SC_PRTNRS_White.png" alt="Scalene Partners" width="auto" height="40">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <a class="navbar-item hvr-overline-reveal" href="team.php">
                            OUR TEAM
                        </a>
                        <a class="navbar-item hvr-overline-reveal is-active" href="join_us.php">
                            JOIN US
                        </a>
                        <a class="navbar-item hvr-overline-reveal" href="contact.php">
                            CONTACT
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="columns has-text-centered">
                <div class="logoContainer column">
                    <h2 class="titleTeam anim">
                        JOIN <span style="font-family: Raleway-light">US</span></h2>
                </div>
                <div class="paddText column is-7">
                    <div class="column">
                        <div class="text">
                            <h2 class="subtitleJoin">We are always looking for smart, dedicated individuals
                                who can help our clients and thus, Scalene Partners, succeed.<br /><br />
                                To apply, we invite you to follow the link below. Should we have an open
                                position and your resume meets our requirements, we will contact you.</h2>
                        </div>
                    </div>
                    <div class="column">
                        <a href="#openModalJoin">
                            <div class="hover">
                                <div class="buttonApply">
                                    <h2 class="subtitleJoinButton">Apply now</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="openModalJoin" class="modalJoin">
                        <div class="centerModal">
                            <div class="column">
                                <div class="column">
                                    <a href="#close" title="Close" class="closeJoin"><img class="crossImg" src="./Assets/Icons/cross2.png"
                                            alt="close" /></a>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <h2 class="infoTeamTitle"><span style="font-family: Raleway-light">APPLICATION</span></h2>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" name="email_form_with_php" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
                                enctype="multipart/form-data">
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <label class="label">First Name</label>
                                            <p class="control is-expanded has-icons-left">
                                                <div class="control">
                                                    <input class="input" type="text" name="firstname">
                                                </div>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <label class="label">Last Name</label>
                                            <p class="control is-expanded has-icons-left has-icons-right">
                                                <div class="control">
                                                    <input class="input" type="text" name="lastname">
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <label class="label">E-mail address</label>
                                            <p class="control is-expanded has-icons-left">
                                                <div class="control">
                                                    <input class="input" type="text" name="email">
                                                </div>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <label class="label">Cellular number</label>
                                            <p class="control is-expanded has-icons-left has-icons-right">
                                                <div class="control">
                                                    <input class="input" type="text" name="phone">
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Message</label>
                                    <div class="control">
                                        <textarea class="textarea" name="message"></textarea>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <label class="label">Resume</label>
                                            <p class="control is-expanded has-icons-left">
                                                <div class="control">
                                                    <input class="input" type="file" name="resume">
                                                </div>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <label class="label">Cover letter</label>
                                            <p class="control is-expanded has-icons-left has-icons-right">
                                                <div class="control">
                                                    <input class="input" type="file" name="cover_letter">
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <input type="submit" name="submit" value="Submit" class="button is-link"></button>
                                    </div>
                                </div>
                            </form>
                            <script language="JavaScript">
                                // Code for validating the form
                                // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
                                // for details
                                var frmvalidator = new Validator("email_form_with_php");
                                frmvalidator.addValidation("firstname", "req", "Please provide your First name");
                                frmvalidator.addValidation("lastname", "req", "Please provide your Last name");

                                frmvalidator.addValidation("email", "req", "Please provide your email");
                                frmvalidator.addValidation("email", "email", "Please enter a valid email address");
                                frmvalidator.addValidation("resume", "req", "Please upload your resume");
																frmvalidator.addValidation("cover_letter", "req", "Please upload your cover letter");
                                frmvalidator.addValidation("phone", "req", "Please enter your phone number");
                                frmvalidator.addValidation("phone", "numeric", "Please enter a valid phone number");
																$(document).on('click', '.notification > button.delete', function() {
    															$(this).parent().addClass('is-hidden');
    															return false;
																});
                            </script>
                        </div>
                    </div>
                </div>
                <!-- <footer class="footer transFooter padd">
                <div class="content has-text-right">
                    <h2 class="subtitle subFooter">© 2018 Scalene Partners -
                        <a class="subFooter" href="mention.php"> Terms of Use</a>
                    </h2>
                </div>
            </footer> -->
            </div>
    </section>
</body>

</html>
