
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="test1.css">
</head>

<body>

    <section class="body_info">
        <div class="header">
            <div class="input">
                <h3>Dog Generator</h3>
                <form class="title_send" method="post" action="">
                    <a>Number of Dogs shoose 1 to 4</a>
                    <input type="number" max="4" min="1" name="naumber" placeholder="naumber">
                    <button type="submit" name="form_validate" >Generator</button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="all_card"><?php
                $s = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/australian_shepherd.jpg">
                    <p>The Australian Shepherd is a breed of herding dog from the United States. Developed in California in the 19th century, it is claimed the breed descends from a variety of herding breeds including collies imported into California with sheep from Australia and New Zealand, the breed taking its name from the former. Originally used solely as a herding dog, the Australian Shepherd has become one of the most popular companion dog breeds in the United States.
                    </p>
                </div>';

                $a = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/german_shepherd.jpg">
                    <p>The breed was officially known as the "Alsatian Wolf Dog" in the UK from after the First World War until 1977 when its name was changed back to German Shepherd.Despite its wolf-like appearance, the German Shepherd is a relatively modern breed of dog, with its origin dating to 1899.
                    </p>
                </div>';

                $d = "
                <div class='card'>
                    <img src='Dogs_Pictures_Information/golden-retriever.jpg'>
                    <p>The Golden Retriever is a medium-large gun dog that was bred to retrieve shot waterfowl, such as ducks and upland game birds, during hunting and shooting parties. The name 'retriever' refers to the breed's ability to retrieve shot game undamaged due to their soft mouth.
                    </p>
                </div>";

                $f = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/icelandic_sheepdog.jpg">
                    <p>The Icelandic Sheepdog is a breed of dog of spitz type originating from the dogs brought to Iceland by the Vikings. It is of similar type to the Norwegian Buhund, the Shetland Sheepdog, and the Welsh Corgi. They are commonly used to herd sheep in the Icelandic countryside.
                    </p>
                </div>';

                $g = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/siberian_husky.jpeg">
                    <p>The Siberian Husky is a medium-sized working sled dog breed. The breed belongs to the Spitz genetic family. It is recognizable by its thickly furred double coat, erect triangular ears, and distinctive markings, and is smaller than the similar-looking Alaskan Malamute.
                    </p>
                </div>';
            
                $h = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/samoyed.jpg">
                    <p>The Samoyed is a breed of medium-sized herding dogs with thick, white, double-layer coats. They are related to the laika, a spitz-type dog. It takes its name from the Samoyedic peoples of Siberia. These nomadic reindeer herders bred the fluffy white dogs to help with herding.
                    </p>
                </div>';
            
                $j = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/pharoah_hound.jpg">
                    <p>The Pharaoh Hound is a Maltese breed of hunting dog. In Maltese it is called Kelb tal-Fenek, which means "rabbit dog"; it is traditionally used for hunting rabbit in the rocky terrain of the Maltese Islands.
                    </p>
                </div>';
            
                $k = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/maltese.jpg">
                    <p>One of the oldest of the European toy breeds, the Maltese has been a lap dog to royalty for centuries. This all-white dog has silky hair instead of fur, often making it more tolerable for those who are allergic. Maltese love to be pampered, cuddled and held, and typically form strong attachments. They are gentle and affectionate, and are easy to train, especially when training is started early. Maltese have a medium energy level and do well indoors or in Small Living Spaces.
                    </p>
                </div>';
            
                $l = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/irish_setter.jpg">
                    <p>The Irish Setter is a setter, a breed of gundog, and family dog. The term Irish Setter is commonly used to encompass the show-bred dog recognised by the American Kennel Club as well as the field-bred Red Setter recognised by the Field Dog Stud Book.
                    </p>
                </div>';
            
                $z = '
                <div class="card">
                    <img src="Dogs_Pictures_Information/australian_hound.jpg">
                    <p>The Afghan Hound is a hound that is distinguished by its thick, fine, silky coat and its tail with a ring curl at the end. The breed is selectively bred for its unique features in the cold mountains of Afghanistan.
                    </p>
                </div>';


                $ran = array($s,$a,$f,$d,$h,$j,$k,$l,$z);

                if(isset($_POST['form_validate']))
                {
                    $bottom = $_POST['naumber'];
                } ;

                $var = $bottom;
                if($var == 1){
                    for ($i = 0; $i < 1; $i++) {
                    $randomElement = $ran[array_rand($ran, 1)];
                    echo $randomElement;
                    
                    };    
                }
                if($var == 2){
                    for ($i = 0; $i < 2; $i++) {
                    $randomElement = $ran[array_rand($ran, 1)];
                    echo $randomElement;
                    
                    };   
                    
                }
                if($var == 3){
                    for ($i = 0; $i < 3; $i++) {
                    $randomElement = $ran[array_rand($ran, 1)];
                    echo $randomElement;
                    
                    };   
                }
                if($var == 4){
                    for ($i = 0; $i < 4; $i++) {
                    $randomElement = $ran[array_rand($ran, 1)];
                    echo $randomElement;
                    
                    };   
                }?>
            </div>
        </div>
    </section>

    </body>
</html>
