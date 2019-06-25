<?php

/* @Public/Public/retrouver.html.twig */
class __TwigTemplate_5803389187fbc1a44324e46f2530a5a7d950b8f3bd6525b06b6732907aeed407 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:index.html.twig", "@Public/Public/retrouver.html.twig", 1);
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
        echo "    <h1>Nous trouver !</h1>
    <p>loren ipsum</p>
";
    }

    public function getTemplateName()
    {
        return "@Public/Public/retrouver.html.twig";
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
        return new Twig_Source("", "@Public/Public/retrouver.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle\\Resources\\views\\Public\\retrouver.html.twig");
    }
}
