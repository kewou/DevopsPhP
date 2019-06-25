<?php

/* @Moniteur/Moniteur/index.html.twig */
class __TwigTemplate_8d938ec2e65f652b69f2c655d83bafefea38e8d0c9535ee1a96d3f71d61e0458 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "@Moniteur/Moniteur/index.html.twig", 1);
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
        echo "    <header id=\"header\" class=\"alt\">
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
        echo "            <nav id=\"nav\">
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->firstLetterOfChaine(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array())), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/icon_user.png"), "html", null, true);
        echo "\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_calendrier");
        echo "\">Calendrier</a>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_moniteur_profile_edit");
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
        echo "    <div>
        <h2 id=\"titreAccueil\">Beezyweb</h2>    
        <p id=\"presBeezyweb\">Vous êtes moniteur ! <br>
            Planifier les réservations est désormais pour vous un jeu d'enfants.        
        </p>
        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Moniteur_calendrier");
        echo "\" id=\"creerCompteBis\">Calendrier</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Moniteur/Moniteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  94 => 23,  91 => 22,  84 => 16,  80 => 15,  76 => 14,  66 => 13,  63 => 12,  60 => 11,  54 => 18,  52 => 11,  46 => 8,  42 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Moniteur/Moniteur/index.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\MoniteurBundle\\Resources\\views\\Moniteur\\index.html.twig");
    }
}
