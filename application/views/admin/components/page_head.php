<!DOCTYPE html>
<html>
<head>
    <title><?=$meta_title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?=site_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?=site_url('js/bootstrap.min.js')?>"></script>
    <script src="<?=site_url('css/bootstrap-datepicker')?>"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- TinyMCE -->
    <script type="text/javascript" src="<?=site_url('js/tiny_mce/tiny_mce.js');?>"></script>
    <!-- <script type="text/javascript" src="/powerpaste2/dist/powerpaste/plugin.js"></script> -->
    <script type="text/javascript">
        tinyMCE.init({
            // General options
            mode : "textareas",
            theme : "advanced",
            plugins : "paste,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage," +
                "advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace," +
                "print,contextmenu,directionality,fullscreen,noneditable,visualchars,nonbreaking," +
                "xhtmlxtras,template,wordcount,advlist,visualblocks",

            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,
            add_unload_trigger: false,


        });
    </script>
    <!-- /TinyMCE -->


</head>