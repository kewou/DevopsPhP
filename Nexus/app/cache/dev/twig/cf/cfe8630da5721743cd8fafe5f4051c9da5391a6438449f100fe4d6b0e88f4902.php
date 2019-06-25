<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_87757e711a5347d813818f66c5e0b574b1bd01b404bc6c88de8b004647fc216f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "reservations", array()));
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
                    echo twig_escape_filter($this->env, (isset($context["iter"]) || array_key_exists("iter", $context) ? $context["iter"] : (function () { throw new Twig_Error_Runtime('Variable "iter" does not exist.', 35, $this->source); })()), "html", null, true);
                    echo "</p>
                        ";
                } else {
                    // line 37
                    echo "                            <p class=\"numResaReserver\">";
                    echo twig_escape_filter($this->env, (isset($context["iter"]) || array_key_exists("iter", $context) ? $context["iter"] : (function () { throw new Twig_Error_Runtime('Variable "iter" does not exist.', 37, $this->source); })()), "html", null, true);
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
                $context["iter"] = ((isset($context["iter"]) || array_key_exists("iter", $context) ? $context["iter"] : (function () { throw new Twig_Error_Runtime('Variable "iter" does not exist.', 43, $this->source); })()) + 1);
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
        if (((isset($context["iter"]) || array_key_exists("iter", $context) ? $context["iter"] : (function () { throw new Twig_Error_Runtime('Variable "iter" does not exist.', 46, $this->source); })()) == 1)) {
            // line 47
            echo "                    <li>Vous n'avez pas de réservations en cours</li>
                ";
        }
        // line 49
        echo "            </ul>                            
        </div>
        <h3>Mes informations</h3>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->source); })()), "money", array()), "html", null, true);
        echo " €  </li>
                    <li>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 65, $this->source); })()), "solde", array()), "html", null, true);
        echo "</li>
                    <li>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 66, $this->source); })()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 66, $this->source); })()), "nom", array()), "html", null, true);
        echo "</li>
                    <li>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 67, $this->source); })()), "email", array()), "html", null, true);
        echo "</li>
                    <li>0";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->formatNumberPhone(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 68, $this->source); })()), "telephone", array())), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 83,  213 => 68,  209 => 67,  203 => 66,  199 => 65,  195 => 64,  178 => 49,  174 => 47,  171 => 46,  165 => 45,  160 => 43,  153 => 41,  149 => 40,  146 => 39,  140 => 37,  134 => 35,  132 => 34,  127 => 32,  121 => 31,  117 => 30,  105 => 25,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  80 => 14,  74 => 13,  65 => 20,  63 => 13,  55 => 8,  51 => 7,  46 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PublicBundle:Public:index.html.twig\" %}

{% block header %}
        <header id=\"header\" class=\"alt\">
        <div id=\"div_logo\">
            <h1 id=\"logo\">
                <a href=\"{{path(\"Privee_accueil\")}}\">
                    <img src=\"{{ asset('bundles/public/assets/css/images/logo.jpg')}}\" title=\"Accueil\" alt=\"logo\" height=\"60\" width=\"60\"/>
                </a>
            </h1>
        </div>          
            <!-- Menu -->
            {% block menu %}
                <nav id=\"nav\">
                    <a href=\"{{path(\"Privee_accueil\")}}\">Accueil</a>
                    <a href=\"{{path(\"Privee_calendrier\")}}\">Calendrier</a>
                    <a href=\"{{path(\"fos_user_profile_edit\")}}\">Paramètres</a>
                    <a href=\"{{path(\"fos_user_security_logout\")}}\"  id=\"deconnexionBouton\">Deconnexion</a>                    
                </nav>  
            {% endblock %}        
        </header>        
{% endblock %}


{% block contenu %}       
    <div id=\"mesInfosCompte\">
        <h3>Mes réservations</h3>
        <div id=\"mesResa\">            
            <ul>            
                {% set iter=1 %} 
                {% for resa in user.reservations %}               
                    {% if resa.dateReservation > date() %}                                                      
                    <li class=\"idResa\">                    
                        {% if resa.etatReservation==\"Valider\" %}
                           <p class=\"numResaValider\">{{iter}}</p>
                        {% else %}
                            <p class=\"numResaReserver\">{{iter}}</p>
                        {% endif %}

                        <p class=\"dateResaShow\">{{ fortmatDate(resa.dateReservation)}} </p>
                        <a class=\"annuleResa\" id=\"{{resa.id}}\"><img src=\"{{ asset('bundles/public/assets/css/images/cancel.jpg')}}\" alt=\"Annuler\" title=\"Annuler\" height=\"20\" width=\"20\"/></a></td>
                    </li>
                        {% set iter=iter + 1 %}                                                        
                    {% endif %}
                {% endfor %}
                {% if iter==1 %}
                    <li>Vous n'avez pas de réservations en cours</li>
                {% endif %}
            </ul>                            
        </div>
        <h3>Mes informations</h3>
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
                    <li>{{ user.money}} €  </li>
                    <li>{{ user.solde}}</li>
                    <li>{{ user.prenom}} {{ user.nom }}</li>
                    <li>{{ user.email }}</li>
                    <li>0{{ formatPhone(user.telephone) }}</li>
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
                url:\"{{ (path('Privee_annuler'))}}\",
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
    
    

{% endblock contenu %}", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
