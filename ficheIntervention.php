<?php
session_start();
ob_start(); 
// deleting a ticket
if(isset($_POST['prestations'])) {


// to save newline break.
$prestations = $_POST['prestations'];
$prestations = str_replace(["\r\n", "\r", "\n"], "/", $prestations);
$prestations = str_replace(array("\r\n", "\r", "\n"), "/", $prestations);
// $prestations = nl2br($prestations);

$fournitures = $_POST['fournitures'];
$fournitures = str_replace(["\r\n", "\r", "\n"], "/", $fournitures);
$fournitures = str_replace(array("\r\n", "\r", "\n"), "/", $fournitures);
// $fournitures = nl2br($fournitures);

$idTicket = trim($_POST['idTicket']);
$materiel = trim($_POST['materiel']);
$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);
$typeTicket = trim($_POST['typeTicket']);

}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">

    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <title>ficher d'intervention</title>
    <style>
    /* Font Definitions */
    @font-face {
        font-family: "Cambria Math";
        panose-1: 2 4 5 3 5 4 6 3 2 4;
    }

    @font-face {
        font-family: "Microsoft Sans Serif";
        panose-1: 2 11 6 4 2 2 2 2 2 4;
    }

    /* Style Definitions */
    h1 {
        margin-top: 9.25pt;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 5.5pt;
        text-autospace: none;
        font-size: 14.0px;
        font-family: "Times New Roman", serif;
        text-decoration: underline;
    }

    p.MsoTitle,
    li.MsoTitle,
    div.MsoTitle {
        margin-top: 0cm;
        margin-right: 93.3pt;
        margin-bottom: 0cm;
        margin-left: 112.75pt;
        text-align: center;
        text-autospace: none;
        font-size: 17.0px;
        font-family: "Times New Roman", serif;
        font-weight: bold;
        text-decoration: underline;
    }

    p.MsoBodyText,
    li.MsoBodyText,
    div.MsoBodyText {
        margin: 0cm;
        text-autospace: none;
        font-size: 14.0px;
        font-family: "Times New Roman", serif;
    }

    p.MsoListParagraph,
    li.MsoListParagraph,
    div.MsoListParagraph {
        margin-top: 1.35pt;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 41.55pt;
        text-indent: -18.05pt;
        text-autospace: none;
        font-size: 11.0px;
        font-family: "Times New Roman", serif;
    }

    .MsoChpDefault {
        font-family: "Calibri", sans-serif;
    }

    .MsoPapDefault {
        text-autospace: none;
    }

    @page WordSection1 {
        size: 596.0pt 842.0pt;
        margin: 37.0pt 36.0pt 14.0pt 37.0pt;
    }

    div.WordSection1 {
        page: WordSection1;
    }

    /* List Definitions */
    ol {
        margin-bottom: 0cm;
    }

    ul {
        margin-bottom: 0cm;
    }
    </style>

</head>

<body lang=fr-DZ style='word-wrap:break-word'>

    <div class=WordSection1>

        <p class=MsoBodyText style='margin-left:7.05pt'><span lang=FR style='font-size:
10.0pt'><img width=684 height=178 id=image1.png src="tmp2_fichiers/image001.png"></span></p>

        <p class=MsoBodyText style='margin-top:.45pt'><span lang=FR style='font-size:
9.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:4.4pt;margin-right:0cm;margin-bottom:
0cm;margin-left:5.5pt;margin-bottom:.0001pt'><span lang=FR>INT.../
                <?php echo $idTicket;?>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                Alger le <?php echo date("d/m/Y");?>
            </span>
        </p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:.25pt'><span lang=FR style='font-size:
22.0pt'>&nbsp;</span></p>

        <p class=MsoTitle><u><span lang=FR>FICHE<span style='letter-spacing:-.65pt'> </span>D'INTERVENTION<span
                        style='letter-spacing:-.85pt'> </span>TECHNIQUE</span></u></p>

        <p class=MsoBodyText><b><span lang=FR style='font-size:19.0pt'>&nbsp;</span></b></p>

        <p class=MsoBodyText><b><span lang=FR style='font-size:19.0pt'>&nbsp;</span></b></p>

        <p class=MsoBodyText style='margin-top:16.6pt;margin-right:0cm;margin-bottom:
0cm;margin-left:5.5pt;margin-bottom:.0001pt'><span lang=FR>Suite à votre demande de "<?php echo $typeTicket ?>"
                au
                "<?php echo $nom . " " .$prenom ?>",relative à la réparation de
                "<?php echo $materiel;?>" nous avons procédé à :
            </span></p>

        <h1 style='margin-left:5.95pt'><u><span lang=FR>Prestations:</span></u></h1>
        <?php 
        $arr = explode("/", $prestations); 
        foreach ($arr as $value) {?>
        <p class=MsoListParagraph style='margin-top:9.35pt'><span lang=FR
                style='font-size:14.0px;font-family:"Microsoft Sans Serif",sans-serif'>&#9679;<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span dir=LTR></span><span
                lang=FR style='font-size:14.0px'><?php echo $value;?></span>
        </p>
        <?php ;}?>

        <h1 style='margin-top:9.3pt'><u><span lang=FR>Fournitures:</span></u></h1>

        <?php $arr = explode("/", $fournitures); 
        foreach ($arr as $value) {?>
        <p class=MsoListParagraph style='margin-top:9.35pt'><span lang=FR
                style='font-size:14.0px;font-family:"Microsoft Sans Serif",sans-serif'>&#9679;<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span dir=LTR></span><span
                lang=FR style='font-size:14.0px'><?php echo $value;?></span></p>
        <?php ;}?>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0pt'>&nbsp;</span></p>


        <p class=MsoBodyText style='margin-top:.45pt'><span lang=FR style='font-size:
13.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-left:5.5pt'><span lang=FR>le<span style='letter-spacing:-.2pt'>
                </span>Responsable<span style='letter-spacing:
-.2pt'> </span>CSI
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                Le<span style='letter-spacing:-.3pt'>
                </span>Responsable<span style='letter-spacing:
-.3pt'> </span>du<span style='letter-spacing:-.3pt'> </span>service<span style='letter-spacing:-.3pt'>
                </span>demandeur</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:.45pt'>

        <table cellpadding=0 cellspacing=0 align=left>
            <tr>
                <td width=40 height=0></td>
            </tr>
            <tr>
                <td><img width=670 height=16 src="tmp2_fichiers/Image1.jpg"></td>
            </tr>
        </table>

        <br clear=ALL>
        </p>

    </div>

</body>

</html>

<?php
$template = ob_get_clean();

require_once __DIR__ . '/vendor/autoload.php';
// echo $template;
 $mpdf = new \Mpdf\Mpdf();
 $mpdf->WriteHTML($template);
 $mpdf->Output();
?>