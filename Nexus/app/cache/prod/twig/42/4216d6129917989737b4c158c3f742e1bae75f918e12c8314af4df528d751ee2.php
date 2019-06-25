<?php

/* PriveeBundle:Privee:index.html.twig */
class __TwigTemplate_a37b6982689f160527de734f715eea476c2db7457588160dfab1b957fd076fbd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "PriveeBundle:Privee:index.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['PriveeBundle\Twig\BeezyExtension']->firstLetterOfChaine(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array())), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/icon_user.png"), "html", null, true);
        echo "\" id=\"icon_user\" alt=\"icon_user\" height=\"15\" width=\"20\"/></a>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_calendrier");
        echo "\">Calendrier</a>
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
        echo "    <div>
        <h2 id=\"titreAccueil\">Beezyweb</h2>    
        <p id=\"presBeezyweb\">Merci de nous faire confiance. Profitez désormais gratuitement des fonctionnalités de beezyweb.             
        </p>
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Privee_calendrier");
        echo "\" id=\"creerCompteBis\">Calendrier</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PriveeBundle:Privee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  94 => 23,  91 => 22,  84 => 16,  80 => 15,  76 => 14,  66 => 13,  63 => 12,  60 => 11,  54 => 18,  52 => 11,  46 => 8,  42 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PriveeBundle:Privee:index.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PriveeBundle/Resources/views/Privee/index.html.twig");
    }
}
