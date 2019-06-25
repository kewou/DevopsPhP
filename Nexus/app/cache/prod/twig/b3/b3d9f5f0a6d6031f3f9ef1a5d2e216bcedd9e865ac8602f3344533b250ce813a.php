<?php

/* @Public/Public/index.html.twig */
class __TwigTemplate_8864e4c59aac5befc2922705927dbb1f3b3004908306d0730bed00b735d436f7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Public/Public/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/main.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "    <header id=\"header\">
        <div id=\"div_logo\">
            <h1 id=\"logo\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Public_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>
        <!-- Menu -->
        ";
        // line 19
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "        
    </header>        
";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "        <nav id=\"nav\">            
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Public_contact");
        echo "\">Contact</a>
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">Connexion</a>    
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" id=\"creerCompte\">Créer un compte</a>            
        </nav>            
        ";
    }

    // line 31
    public function block_contenu($context, array $blocks = array())
    {
        // line 32
        echo "    <div>
        <h2 id=\"titreAccueil\">Beezyweb</h2>    
        <p id=\"presBeezyweb\">Votre plateforme de prises de rendez-vous entièrement en ligne.</p>
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" id=\"creerCompteBis\">Créer un compte</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Public/Public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  102 => 32,  99 => 31,  92 => 23,  88 => 22,  84 => 21,  81 => 20,  78 => 19,  72 => 25,  70 => 19,  62 => 16,  58 => 14,  55 => 13,  47 => 8,  43 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Public/Public/index.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle\\Resources\\views\\Public\\index.html.twig");
    }
}