<?php

/* PublicBundle:Public:nouveaux.html.twig */
class __TwigTemplate_25fc84ffd28af384e854b57392f28f115bc6cf5060fd045f5a1c653f0807d311 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "PublicBundle:Public:nouveaux.html.twig", 1);
        $this->blocks = array(
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
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Nouveaux !</h1>
    <p>Prix de l heure de conduite : 36.5 €</p>
";
    }

    public function getTemplateName()
    {
        return "PublicBundle:Public:nouveaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PublicBundle:Public:nouveaux.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle/Resources/views/Public/nouveaux.html.twig");
    }
}
