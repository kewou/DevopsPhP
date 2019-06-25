<?php

/* PublicBundle:Public:contact.html.twig */
class __TwigTemplate_df88889a4a8e3effeda3b3f0dd9d7793c140cce1b949ca0f24954c5df7b26b48 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "PublicBundle:Public:contact.html.twig", 1);
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "<!-- Header -->
    <header id=\"header\">
        <div id=\"div_logo\">
            <h1 id=\"logo\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Public_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/assets/css/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"60\" width=\"60\"/></a></h1>
        </div>
        ";
        // line 10
        $this->displayBlock('menu', $context, $blocks);
        // line 16
        echo " 
    </header>
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "        <nav id=\"nav\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Public_accueil");
        echo "\">Accueil</a>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">Connexion</a>            
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" id=\"creerCompte\">Créer un compte</a>
        <nav>             
        ";
    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        // line 20
        echo "<section class=\"major\">\t\t\t\t\t\t
    <div class=\"inner\">        
        <div id=\"form_contact\" class=\"block_form\">\t
        <form method=\"post\" action=\"\">
                <label class=\"form_label\" for=\"name\">Nom</label>
                <input class=\"input_form\" required=\"required\" type=\"text\" name=\"nom\" id=\"name\" placeholder=\"Nom\" />
                <label class=\"form_label\" for=\"email\">Email</label>
                <input class=\"input_form\" required=\"required\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" />
                <label class=\"form_label\" for=\"sujet\">Sujet</label>
                <input class=\"input_form\" required=\"required\" type=\"text\" name=\"sujet\" id=\"sujet\" placeholder=\"Sujet\" />
                <label class=\"form_label\" for=\"message\">Message</label>
                <textarea class=\"form_textarea\" required=\"required\" name=\"message\" id=\"message\" rows=\"4\"></textarea>
                
                <input id=\"envoiMail\" type=\"submit\" value=\"Envoyer\" />
        </form>
        </div>
    </div>\t\t\t\t\t\t
</section>   
";
    }

    public function getTemplateName()
    {
        return "PublicBundle:Public:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  78 => 19,  71 => 14,  67 => 13,  63 => 12,  60 => 11,  57 => 10,  51 => 16,  49 => 10,  42 => 8,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PublicBundle:Public:contact.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle/Resources/views/Public/contact.html.twig");
    }
}
