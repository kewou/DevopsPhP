<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_1674bef99443e19d66b97bfdfe4f80010680af9656596c755416d4c041310db5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicBundle:Public:index.html.twig";
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
        echo "\" title=\"Accueil\" alt=\"logo\" height=\"60\" width=\"60\"/>
                </a>
            </h1>
        </div>          
            <!-- Menu -->
            ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 20
        echo "        
        </header>        
";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "                <nav id=\"nav\">
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_accueil");
        echo "\">Accueil</a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_calendrier");
        echo "\">Calendrier</a>
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
        echo "\">Paramètres</a>
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                    
                </nav>  
            ";
    }

    // line 25
    public function block_contenu($context, array $blocks = array())
    {
        echo "       
    <div id=\"mesInfosCompte\">
        <h3>Mes réservations</h3>
        <div id=\"mesResa\">            
            <ul>            
                ";
        // line 30
        $context["iter"] = 1;
        echo " 
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "reservations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["resa"]) {
            echo "               
                    ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["resa"], "dateReservation", array()) > twig_date_converter($this->env))) {
                echo "                                                      
                    <li class=\"idResa\">                    
                        ";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, $context["resa"], "etatReservation", array()) == "Valider")) {
                    // line 35
                    echo "                           <p class=\"numResaValider\">";
                    echo twig_escape_filter($this->env, ($context["iter"] ?? null), "html", null, true);
                    echo "</p>
                        ";
                } else {
                    // line 37
                    echo "                            <p class=\"numResaReserver\">";
                    echo twig_escape_filter($this->env, ($context["iter"] ?? null), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 39
                echo "
                        <p class=\"dateResaShow\">";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->formatDateInFrench(twig_get_attribute($this->env, $this->source, $context["resa"], "dateReservation", array())), "html", null, true);
                echo " </p>
                        <a class=\"annuleResa\" id=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resa"], "id", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/cancel.jpg"), "html", null, true);
                echo "\" alt=\"Annuler\" title=\"Annuler\" height=\"20\" width=\"20\"/></a></td>
                    </li>
                        ";
                // line 43
                $context["iter"] = (($context["iter"] ?? null) + 1);
                echo "                                                        
                    ";
            }
            // line 45
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                ";
        if ((($context["iter"] ?? null) == 1)) {
            // line 47
            echo "                    <li>Vous n'avez pas de réservations en cours</li>
                ";
        }
        // line 49
        echo "            </ul>            
        </div>
        <h3 id=\"mesInfosTitre\">Mes informations</h3>
        <ul id=\"mesInfosPerso\">
            <li id=\"infosKey\">
                <ul>                           
                    <li>Solde </li>
                    <li>Jeton (s)</li>
                    <li>Identité</li>
                    <li>Email</li>
                    <li>Téléphone</li>
                </ul>
            </li>
            <li id=\"infosValue\">
                <ul>                           
                    <li>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "money", array()), "html", null, true);
        echo " €  </li>
                    <li>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "solde", array()), "html", null, true);
        echo "</li>
                    <li>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "</li>
                    <li>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</li>
                    <li>0";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->formatNumberPhone(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "telephone", array())), "html", null, true);
        echo "</li>
                </ul>
            </li> 
        </ul>      
    </div>
            
    <script>
        \$(\".annuleResa\").click(function(){
            idResa=\$(this).attr('id');
            annuler(idResa);
        });
        
        function annuler(idResa){            
            \$.ajax({
                type:\"POST\",
                url:\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_annuler");
        echo "\",
                data:{idResa:idResa},
                success: function (data) {                    
                }
            });
        }
        
        \$(document).ajaxStop(function(){
            window.location.reload();
        });
    </script>
    
    <script>
        \$(document).ready(function(){
          \$('.menu-tab').click(function(){              
            \$('.menu-hide').toggleClass('show');
            \$('.menu-tab').toggleClass('active');
          });
          \$('a').click(function(){
            \$('.menu-hide').removeClass('show');
            \$('.menu-tab').removeClass('active');
          });
        });        
    </script>
    
    

";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 83,  192 => 68,  188 => 67,  182 => 66,  178 => 65,  174 => 64,  157 => 49,  153 => 47,  150 => 46,  144 => 45,  139 => 43,  132 => 41,  128 => 40,  125 => 39,  119 => 37,  113 => 35,  111 => 34,  106 => 32,  100 => 31,  96 => 30,  87 => 25,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  65 => 14,  62 => 13,  56 => 20,  54 => 13,  46 => 8,  42 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
