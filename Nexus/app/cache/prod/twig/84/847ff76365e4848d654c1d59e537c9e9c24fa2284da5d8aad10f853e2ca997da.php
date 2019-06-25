<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cddde4986ab21b229f3d184d199ce84cc5431d84c7d4cf067e1bb1f4195a5b1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
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
        echo "      
    
    ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "        <div id=\"login_msg_error\"  style=\"width:35%;margin:0 auto;margin-bottom: 10px;border:1px solid #e44c65;border-radius:5px;background-color:#e2c4c9;padding-top:10px;padding-bottom:10px;\" >
            <span class=\"login_msg_error_label\" >";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo " </span>
            <button id=\"login_msg_error_button\" class=\"login_msg_error_button\" type=\"button\" >x</button>
        </div>
    ";
        }
        // line 14
        echo "    
    <div id=\"form_contenair_login\" class=\"block_form\">

        <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />

            <label for=\"username\" class=\"label_connexion\">Adresse mail</label>
            <input type=\"text\" id=\"username\" class=\"input_form\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"joelBeezyweb@ ...\"/>

            <label for=\"password\" class=\"label_connexion\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" class=\"input_form\"  name=\"_password\" required=\"required\" placeholder=\"Votre mot de passe\"/>
            
            <div id=\"rememberBlock\">
                <label for=\"remember_me\" id=\"label_remember\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"checkbox\" id=\"remember_me_check_box\"  name=\"_remember_me\" value=\"on\" />
            </div>
            
            <div id=\"forget_password\">
                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>
            </div>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>    
    </div>
        
    <script type=\"text/javascript\">
        document.getElementById (\"login_msg_error_button\").onclick = function() {
        var element = document.getElementById (\"login_msg_error\");
            element.parentNode.removeChild(element);
        };
    </script>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  85 => 32,  77 => 27,  70 => 23,  65 => 21,  59 => 18,  55 => 17,  50 => 14,  43 => 10,  40 => 9,  38 => 8,  32 => 6,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
