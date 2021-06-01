//Deffilement images + redirection lorsque cliquez


imgPath = new Array;
SiClickGoTo = new Array;
version = navigator.appVersion.substring(0,1);
if (version >= 3)
    {
    i0 = new Image;
    i0.src = 'Image/test/test.png';
    SiClickGoTo[0] = "Site/Baptheme/Baptheme.php"; //Là où l'utilisateur va si il clique sur l'image
    imgPath[0] = i0.src;

    i1 = new Image;
    i1.src = 'Image/test/test3.png';
    SiClickGoTo[1] = "Site/Mariage/Mariage.php"; //Là où l'utilisateur va si il clique sur l'image
    imgPath[1] = i1.src;

    i2 = new Image;
    i2.src = 'Image/test/test3.png';
    SiClickGoTo[2] = "Site/Deuil/Deuil.png"; //Là où l'utilisateur va si il clique sur l'image
    imgPath[2] = i2.src;

    //Possibiliter d'ajout d'image
    }
a = 0;

function StartAnim()
    {
    //Si la version du navigateur est suffisante
    if (version >= 3)
        {
        document.write('<a href="#" onclick="ImgDest();return(false)"><img src="Image/test/test.png" border="0" alt="Menu" name="defil" /></a>');
        defilimg()
        }
    //Sinon, on affiche que la 1er image
    else
        {
        document.write('<a href="Lien0"><img src="Image/test/test.png" border="0" /></a>')
        }
    }
function ImgDest()
    {
    document.location.href = SiClickGoTo[a-1];
    }
function defilimg()
    {
    if (a == 3)
        {
        a = 0;
        }
    if (version >= 3)
        {
        document.defil.src = imgPath[a];
        tempo3 = setTimeout("defilimg()",5001);
        a++;
        }
    }
