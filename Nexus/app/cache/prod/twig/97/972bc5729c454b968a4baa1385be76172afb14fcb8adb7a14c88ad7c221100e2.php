<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2fe9a65bb7470b074afbe49b43bb2efa369ad17c1b14a3abed4b4c0e5f244667 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 7
        echo " <p class=\"msg_info_generale\">
    Votre compte est activé !
    Vous pouvez dès à présent profiter des fonctionnalités offertes par Beezyweb :)
</p>    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  32 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
