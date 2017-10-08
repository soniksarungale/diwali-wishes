<?php
    $title = "Diwali wishes";
    $description = "Make Your Own Diwali Greating Card And Share With Your Friends and family";
    $key1 = "Diwali wishes";
    $key2 = "Diwali wishes to friends";
    $key3 = "Share Diwali wishes";
    $key4 = "Diwali wishes card";
    $key5 = "Diwali";
    $key6 = "Diwali wishes to family";
    $key7 = "online Diwali wishes card";
    $key8 = "Diwali wishes Greating Card";
    
    $card=0;
    if(isset($_GET["name"])){
        $name = trim($_GET["name"]);
        if($name!=NULL && $name!="" && strlen($name)<30){
            $title=$name." Sent Special Diwali Wishes";
            $description = $name." had send a special diwali  greating card to his friends and family";
            $key1 = $name." Diwali wishes";
            $key2 = $name." Diwali wishes to friends";
            $key3 = $name." Share Diwali wishes";
            $key4 = "Diwali wishes card from ".$name;
            $key5 = "Diwali wishes";
            $key6 = "Diwali wishes to {$name} family";
            $card=1;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($title);?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($description);?>" /> 
    <meta name="HandheldFriendly" content="true"/>
    <meta name="keywords" content="<?php echo htmlspecialchars($key1).", ".htmlspecialchars($key2).", ".htmlspecialchars($key3).", ".htmlspecialchars($key4).", ".htmlspecialchars($key5).", ".htmlspecialchars($key6).", ".htmlspecialchars($key7).", ".htmlspecialchars($key8)?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($title);?>"/>
    <meta property="og:site_name" content="<?php echo htmlspecialchars($title);?>"/>
    <meta property="og:type" content="website">
    <?php
        if($card){
    ?>
    <meta name="author" content="<?php echo htmlspecialchars($name);?>">
    <meta name="title" content="<?php echo htmlspecialchars($name)." Diwali Wishes";?>" />
    <?php
        }
    ?>
    <link rel="icon" type="image/png" href="img/diya.gif">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body  <?php if(!$card){echo "class = 'bg'";}?>>
    <div class="layer <?php if(!$card){echo 'height';}?>">
        <?php
            if($card){
                if(isset($_GET["go"])){
        ?>
            <div class="share">
                <a href="whatsapp://send?text=<?php echo htmlspecialchars($name);?> Sent You a Special Greating Card For Diwali : http://www.diwali-wishes.cf/?name=<?php echo htmlspecialchars($name)?>" data-action="share/whatsapp/share" class="btn whatsapp">
                    <div class="text">SHARE</div><img src="img/whatsapp.jpg" alt="Whatsapp">
                </a>
                <a href="http://www.facebook.com/sharer/sharer.php?u=http://www.diwali-wishes.cf/?name=<?php echo htmlspecialchars($name)?>" class="btn fb">
                    <div class="text">SHARE</div><img src="img/fb.jpg" alt="Face Book">
                </a>
            </div>
        <?php
                }
        ?>
        <div class="card-body">
            <div class="card">
                <div class="kandil left"><img src="img/kandil.jpg" alt="Kandil"></div>
                <div class="kandil right"><img src="img/kandil.jpg" alt="Kandil"></div>
                <h1 class="card-heading"><?php echo htmlspecialchars($name);?> WISHES YOU<br>HAPPY DIWALI</h1>
                <div class="diva"><img src="img/diya.gif" alt="diya"></div>
                <div class="card-msg">
                    <p>
                        I am wishing that the bright lights
                        of Diwali guides you through your way out
                        of every streak of trials in this life.
                        Happy Diwali!
                    </p>
                </div>
                <div class="from">- <?php echo htmlspecialchars($name);?></div>
            </div>
        </div> 
        <?php        
            }
        ?>
        <div class="flex <?php if(!$card){echo 'height';}?>">
            <div class="box">
                <div class="heading"><h1>Create Your Diwali Wishes</h1></div>
                <div class="description">Enter Your Name To Create Your Diwali Wishes.</div>
                <div class="form">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                        <input type="text" name="name" placeholder="Enter your name..." required class="user-name">
                        <input type="submit" name="go" class="submit" value="GO">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer footerup <?php if(!$card){echo 'absolute up';}?>">
            Designed & Developed by <a href="http://soniksarungale.cf/">Sonik Sarungale</a>
        </div>
        <div class="footer <?php if(!$card){echo 'absolute';}?>">
            © Diwali Wishes cf
        </div>
    </div>
</body>
</html>