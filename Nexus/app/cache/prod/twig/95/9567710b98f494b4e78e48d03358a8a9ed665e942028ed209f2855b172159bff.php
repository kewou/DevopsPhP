<?php

/* @Public/Public/permis.html.twig */
class __TwigTemplate_e725d8193796e4f98123abf5899cf7eeb3f8c0424b381d5562212b9241e430fd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PublicBundle:Public:code.html.twig", "@Public/Public/permis.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicBundle:Public:code.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "\t<section id=\"wrapper\">
\t\t";
        // line 5
        $this->displayBlock('wrapper', $context, $blocks);
        // line 17
        echo "\t</section> 
";
    }

    // line 5
    public function block_wrapper($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper spotlight style1\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<a href=\"#\" class=\"image\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/public/images/pic01.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2 class=\"major\">Permis B</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "@Public/Public/permis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  46 => 5,  41 => 17,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Public/Public/permis.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\PublicBundle\\Resources\\views\\Public\\permis.html.twig");
    }
}
