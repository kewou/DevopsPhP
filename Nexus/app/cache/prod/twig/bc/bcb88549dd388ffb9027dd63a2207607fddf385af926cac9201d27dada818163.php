<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_797eec7ec566bde59f031aea55af78f6d86f091489c955b9cd64cd46d0e11a0e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('body_html', $context, $blocks);
        // line 28
        echo "

";
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array());
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array());
        echo "  Bienvenue chez Beezyweb !
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", array());
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", array());
        echo "

Bravo ! vous êtes désormais inscrit chez Beezyweb.
Une application qui vous facilitera les échanges avec votre auto-école.

Merci d'activer votre compte en cliquant sur le lien ci-dessous 
";
        // line 15
        echo ($context["confirmationUrl"] ?? null);
        echo "

Vous allez allez vite adopter la simplicité d'utilisation et toutes les possibilités offertes par Beezyweb.

Bien cordialement
L'équipe Beezyweb.

https://Beezyweb.net

";
    }

    // line 27
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  69 => 15,  58 => 9,  55 => 7,  47 => 3,  44 => 1,  38 => 28,  36 => 27,  33 => 26,  31 => 7,  28 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
