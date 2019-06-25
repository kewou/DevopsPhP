<?php

/* @Moniteur/Profile/edit.html.twig */
class __TwigTemplate_96576a2990935ae4feaddc2091f8966c764263882ef4550b6598a36432d70666 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PriveeBundle:Privee:index.html.twig", "@Moniteur/Profile/edit.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Moniteur/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <header id=\"header\" class=\"alt\">
    <div id=\"div_logo\">
        <h1 id=\"logo\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_accueil");
        echo "\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
    </div>            
        <!-- Menu -->
        ";
        // line 12
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "        
    </header>        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "            <nav id=\"nav\">
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_accueil");
        echo "\">Accueil</a>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->firstLetterOfChaine(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "prenom", array())), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "nom", array()), "html", null, true);
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/icon_user.png"), "html", null, true);
        echo "\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_calendrier");
        echo "\">Calendrier</a>
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"  id=\"deconnexionBouton\">Deconnexion</a>                   
            </nav>  
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 24
        echo "    <div id=\"form_parametre\" class=\"block_form\">
        <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), 'enctype');
        echo " method=\"POST\" class=\"fos_moniteur_profile_edit\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'widget');
        echo "
            <div>
                <input id=\"update_Param\" type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
    \t\t\t\t\t\t\t\t\t\t\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Moniteur/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 28,  124 => 26,  118 => 25,  115 => 24,  109 => 23,  99 => 17,  95 => 16,  85 => 15,  81 => 14,  78 => 13,  72 => 12,  63 => 19,  61 => 12,  55 => 9,  51 => 8,  46 => 5,  40 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PriveeBundle:Privee:index.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block header %}
    <header id=\"header\" class=\"alt\">
    <div id=\"div_logo\">
        <h1 id=\"logo\">
        <a href=\"{{path(\"Moniteur_accueil\")}}\">
        <img src=\"{{ asset('bundles/public/assets/css/images/logo.jpg')}}\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
    </div>            
        <!-- Menu -->
        {% block menu %}
            <nav id=\"nav\">
                <a href=\"{{path(\"Moniteur_accueil\")}}\">Accueil</a>
                <a href=\"{{path(\"fos_moniteur_profile_show\")}}\">{{firstLetter(user.prenom)}}. {{user.nom}}<img src=\"{{ asset('bundles/public/assets/css/images/icon_user.png')}}\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>
                <a href=\"{{path(\"Moniteur_calendrier\")}}\">Calendrier</a>
                <a href=\"{{path(\"fos_user_security_logout\")}}\"  id=\"deconnexionBouton\">Deconnexion</a>                   
            </nav>  
        {% endblock %}        
    </header>        
{% endblock %}

{% block contenu %}
    <div id=\"form_parametre\" class=\"block_form\">
        <form action=\"{{ path('fos_moniteur_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_moniteur_profile_edit\">
            {{ form_widget(form) }}
            <div>
                <input id=\"update_Param\" type=\"submit\" value=\"{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}\" />
            </div>
        </form>
    </div>
    \t\t\t\t\t\t\t\t\t\t\t
{% endblock contenu %}


", "@Moniteur/Profile/edit.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\MoniteurBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
