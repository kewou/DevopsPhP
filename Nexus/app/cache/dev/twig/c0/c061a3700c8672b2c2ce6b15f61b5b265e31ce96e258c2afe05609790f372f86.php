<?php

/* CalendrierBundle:Calendrier:calendrierPrivee.html.twig */
class __TwigTemplate_c51b00216e34829773d98af5d457855d7bcda65039cf7c3f41d3cb3ad31488c0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PriveeBundle:Privee:index.html.twig", "CalendrierBundle:Calendrier:calendrierPrivee.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CalendrierBundle:Calendrier:calendrierPrivee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->firstLetterOfChaine(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "prenom", array())), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "nom", array()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cal"]) || array_key_exists("cal", $context) ? $context["cal"] : (function () { throw new Twig_Error_Runtime('Variable "cal" does not exist.', 42, $this->source); })()), "display", array(), "method"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CalendrierBundle:Calendrier:calendrierPrivee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 116,  215 => 109,  187 => 84,  176 => 76,  149 => 52,  136 => 42,  115 => 23,  109 => 22,  99 => 16,  95 => 15,  85 => 14,  81 => 13,  78 => 12,  72 => 11,  63 => 18,  61 => 11,  55 => 8,  51 => 7,  46 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PriveeBundle:Privee:index.html.twig\" %}

{% block header %}
        <header id=\"header\" class=\"alt\">
        <div id=\"div_logo\">
            <h1 id=\"logo\">
            <a href=\"{{path(\"Privee_accueil\")}}\">
            <img src=\"{{ asset('bundles/public/assets/css/images/logo.jpg')}}\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>            
            <!-- Menu -->
            {% block menu %}
                <nav id=\"nav\">
                    <a href=\"{{path(\"Privee_accueil\")}}\">Accueil</a>
                    <a href=\"{{path(\"fos_user_profile_show\")}}\">{{firstLetter(user.prenom)}}. {{user.nom}}<img src=\"{{ asset('bundles/public/assets/css/images/icon_user.png')}}\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>                    
                    <a href=\"{{path(\"fos_user_profile_edit\")}}\">Paramètres</a>
                    <a href=\"{{path(\"fos_user_security_logout\")}}\"  id=\"deconnexionBouton\">Deconnexion</a>                   
                </nav>  
            {% endblock %}        
        </header>        
{% endblock %}

{% block contenu %}
    <input type='button' id='reserveDate' value='Réserver'>
    
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
        {{ cal.display() }}        
    </div>
    
    <script>
        \$(\"#reserveDate\").css('display','none');
        \$(\".checkCase\").css(\"background-image\",\"none\");
        \$(\".checkCase\").css(\"background-color\",\"white\");
        \$(document).on(\"click\",\".checkCase\",function(){
            if(!this.firstChild.checked){
                \$(\"#reserveDate\").css('display','block');
                \$(this).css(\"background-image\",\"url({{ asset('bundles/public/assets/css/images/checked.png')}})\");                
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
                \$.post(\"{{ (path('Privee_calendrierPagination'))}}\",{datePivot:dateEnvoyer},
                        function(data){                            
                            \$('#calendrier').html(data);
                });                
            });
            \$('#previousSevenDay').click(function(){
                date.setDate(date.getDate() -7);
                var dateEnvoyer = date.format(\"yyyy-MM-dd h:mm:ss\");
                \$.post(\"{{ (path('Privee_calendrierPagination'))}}\",{datePivot:dateEnvoyer},
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
                        url:\"{{ (path('Privee_reserver_controle'))}}\",
                        data:{lesResaChoisi:tabResa},                    
                        async:false,
                        complete: function(data){                        
                                    if(data[\"responseText\"]!==\"\"){
                                        alert(data[\"responseText\"]);
                                    }else{
                                        \$.post(\"{{ (path('Privee_reserver'))}}\",{lesResaChoisi:tabResa},
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
{% endblock %}", "CalendrierBundle:Calendrier:calendrierPrivee.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\CalendrierBundle\\Resources\\views\\Calendrier\\calendrierPrivee.html.twig");
    }
}
