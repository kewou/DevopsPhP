<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_be695cb89949f85ea74e3d73658002cca4b0dca675311e164cb3372321ed6e37 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo "      
    
    ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <div id=\"login_msg_error\"  style=\"width:35%;margin:0 auto;margin-bottom: 10px;border:1px solid #e44c65;border-radius:5px;background-color:#e2c4c9;padding-top:10px;padding-bottom:10px;\" >
            <span class=\"login_msg_error_label\" >";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->source); })()), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" />

            <label for=\"username\" class=\"label_connexion\">Adresse mail</label>
            <input type=\"text\" id=\"username\" class=\"input_form\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  94 => 32,  86 => 27,  79 => 23,  74 => 21,  68 => 18,  64 => 17,  59 => 14,  52 => 10,  49 => 9,  47 => 8,  38 => 6,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"UserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block contenu %}      
    
    {% if error %}
        <div id=\"login_msg_error\"  style=\"width:35%;margin:0 auto;margin-bottom: 10px;border:1px solid #e44c65;border-radius:5px;background-color:#e2c4c9;padding-top:10px;padding-bottom:10px;\" >
            <span class=\"login_msg_error_label\" >{{ error.messageKey|trans(error.messageData, 'security') }} </span>
            <button id=\"login_msg_error_button\" class=\"login_msg_error_button\" type=\"button\" >x</button>
        </div>
    {% endif %}
    
    <div id=\"form_contenair_login\" class=\"block_form\">

        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

            <label for=\"username\" class=\"label_connexion\">Adresse mail</label>
            <input type=\"text\" id=\"username\" class=\"input_form\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"joelBeezyweb@ ...\"/>

            <label for=\"password\" class=\"label_connexion\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
            <input type=\"password\" id=\"password\" class=\"input_form\"  name=\"_password\" required=\"required\" placeholder=\"Votre mot de passe\"/>
            
            <div id=\"rememberBlock\">
                <label for=\"remember_me\" id=\"label_remember\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
                <input type=\"checkbox\" id=\"remember_me_check_box\"  name=\"_remember_me\" value=\"on\" />
            </div>
            
            <div id=\"forget_password\">
                <a href=\"{{path(\"fos_user_resetting_request\")}}\">Mot de passe oublié ?</a>
            </div>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
        </form>    
    </div>
        
    <script type=\"text/javascript\">
        document.getElementById (\"login_msg_error_button\").onclick = function() {
        var element = document.getElementById (\"login_msg_error\");
            element.parentNode.removeChild(element);
        };
    </script>

{% endblock contenu %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Beezyweb\\src\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
