<?php

/* @Calendrier/Calendrier/calendrierPrivee.html.twig */
class __TwigTemplate_96046ebefde1f97c1dfaaf9450337955d8042ab04bec208cf57048ea8e4dbd35 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PriveeBundle:Privee:index.html.twig", "@Calendrier/Calendrier/calendrierPrivee.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PriveeBundle:Privee:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "        <header id=\"header\" class=\"alt\">
        <div id=\"div_logo\">
            <h1 id=\"logo\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_accueil");
        echo "\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>            
            <!-- Menu -->
            ";
        // line 11
        $this->displayBlock('menu', $context, $blocks);
        // line 18
        echo "        
        </header>        
";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "                <nav id=\"nav\">
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_accueil");
        echo "\">Accueil</a>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->firstLetterOfChaine(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array())), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/icon_user.png"), "html", null, true);
        echo "\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>                    
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
        echo "\">Paramètres</a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                   
                </nav>  
            ";
    }

    // line 22
    public function block_contenu($context, array $blocks = array())
    {
        // line 23
        echo "    <input type='button' id='reserveDate' value='Réserver'>
    
    <div id='paginationCalendrier'>
        <ul class=\"pagination\">
            <li class=\"page-item\">                
                <a id=\"previousSevenDay\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only \">Previous</span>
                </a>
            </li>
            <li class=\"page-item\">
                <a id=\"nextSevenDay\" href=\"#\" aria-label=\"Next\">
                  <span aria-hidden=\"true\">&raquo;</span>
                  <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>
    </div>
    <div id=\"calendrier\">        
        ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cal"] ?? null), "display", array(), "method"), "html", null, true);
        echo "        
    </div>
    
    <script>
        \$(\"#reserveDate\").css('display','none');
        \$(\".checkCase\").css(\"background-image\",\"none\");
        \$(\".checkCase\").css(\"background-color\",\"white\");
        \$(document).on(\"click\",\".checkCase\",function(){
            if(!this.firstChild.checked){
                \$(\"#reserveDate\").css('display','block');
                \$(this).css(\"background-image\",\"url(";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/checked.png"), "html", null, true);
        echo ")\");                
                \$(this).css(\"background-repeat\",\"no-repeat\");
                \$(this).css(\"background-position\",\"right\");
                \$(this).css(\"background-color\",\"#ADD8E6\");
                this.firstChild.checked=true;                
            }else{
                this.firstChild.checked=false;
                \$(this).css(\"background-image\",\"none\");
                \$(this).css(\"background-color\",\"white\");
                if(\$(\"input:checked\").length===0){
                    \$(\"#reserveDate\").css('display','none');
                }                
            }
        });
    </script>
         
    
    <!-- Pagination -->
    <script>        
        var date = new Date();
        \$(document).ready(function(){            
            \$('#nextSevenDay').click(function(){
                date.setDate(date.getDate() + 7);
                var dateEnvoyer = date.format(\"yyyy-MM-dd h:mm:ss\");
                \$.post(\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_calendrierPagination");
        echo "\",{datePivot:dateEnvoyer},
                        function(data){                            
                            \$('#calendrier').html(data);
                });                
            });
            \$('#previousSevenDay').click(function(){
                date.setDate(date.getDate() -7);
                var dateEnvoyer = date.format(\"yyyy-MM-dd h:mm:ss\");
                \$.post(\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_calendrierPagination");
        echo "\",{datePivot:dateEnvoyer},
                        function(data){
                            \$('#calendrier').html(data);
                });                
            });            
                   
        <!-- Action Réserver -->    

            \$(\"#reserveDate\").click(function(){
                reserver();
            });          
            
            function reserver(){
                var tabResa = [];
                var tabControle=[]; 
                \$(\"input[type='checkbox']:checked\").each(function(){
                    tabResa.push(\$(this).val());
                });                
                // Ajouter les controle Front
                controleReservation(tabResa,tabControle);
                if(tabControle.length !==0){
                    alert(tabControle[0]);
                }else{                
                    \$.ajax({
                        type:\"POST\",
                        url:\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_reserver_controle");
        echo "\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_reserver");
        echo "\",{lesResaChoisi:tabResa},
                                            function(data){
                                                \$('#calendrier').html(data);
                                        });

                                    }
                       }
                    });
                }                
                var tabResa = [];
                var tabControle= [];
            }
            
         
            
            function controleReservation(tabResa,tabControle){
                if(tabResa.length > 2){
                    tabControle.push(\"Pas plus de deux resa\");
                }            
            }
            
        });      
        
        Date.prototype.format = function (format){ //author: meizz
            var o = {
                \"M+\": this.getMonth() + 1, //month
                \"d+\": this.getDate(), //day
                \"h+\": this.getHours(), //hour
                \"m+\": this.getMinutes(), //minute
                \"s+\": this.getSeconds(), //second
                \"q+\": Math.floor((this.getMonth() + 3) / 3), //quarter
                \"S\": this.getMilliseconds() //millisecond
            }
            if (/(y+)/.test(format))
                format = format.replace(RegExp.\$1, (this.getFullYear() + \"\").substr(4 - RegExp.\$1.length));
            for (var k in o)
                if (new RegExp(\"(\" + k + \")\").test(format))
                    format = format.replace(RegExp.\$1,
                            RegExp.\$1.length === 1 ? o[k] :
                            (\"00\" + o[k]).substr((\"\" + o[k]).length));
            return format;
            }            

                      
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Calendrier/Calendrier/calendrierPrivee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 116,  194 => 109,  166 => 84,  155 => 76,  128 => 52,  115 => 42,  94 => 23,  91 => 22,  84 => 16,  80 => 15,  70 => 14,  66 => 13,  63 => 12,  60 => 11,  54 => 18,  52 => 11,  46 => 8,  42 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Calendrier/Calendrier/calendrierPrivee.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\CalendrierBundle\\Resources\\views\\Calendrier\\calendrierPrivee.html.twig");
    }
}
