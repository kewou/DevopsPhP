<?php

/* @Public/Public/tarifs.html.twig */
class __TwigTemplate_7bab681aba67845a6762ddd4a5b6dfd4bf7dafaf1210a05be62d4fd167e9c2ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "@Public/Public/tarifs.html.twig", 1);
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
        echo "    <h1>Nos tarifs</h1>
    <p>loren ipsum</p>
";
    }

    public function getTemplateName()
    {
        return "@Public/Public/tarifs.html.twig";
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
        return new Twig_Source("", "@Public/Public/tarifs.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle\\Resources\\views\\Public\\tarifs.html.twig");
    }
}
