<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edf8fc07873764f5b75ad3944ddc260eeabd7a034e186a7c3b98bcf081f27b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf8fc07873764f5b75ad3944ddc260eeabd7a034e186a7c3b98bcf081f27b24->enter($__internal_edf8fc07873764f5b75ad3944ddc260eeabd7a034e186a7c3b98bcf081f27b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_476a01094c6498e62512454e29829d82a78d9ff105e4bb99eb09ce2c3140e29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476a01094c6498e62512454e29829d82a78d9ff105e4bb99eb09ce2c3140e29f->enter($__internal_476a01094c6498e62512454e29829d82a78d9ff105e4bb99eb09ce2c3140e29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_edf8fc07873764f5b75ad3944ddc260eeabd7a034e186a7c3b98bcf081f27b24->leave($__internal_edf8fc07873764f5b75ad3944ddc260eeabd7a034e186a7c3b98bcf081f27b24_prof);

        
        $__internal_476a01094c6498e62512454e29829d82a78d9ff105e4bb99eb09ce2c3140e29f->leave($__internal_476a01094c6498e62512454e29829d82a78d9ff105e4bb99eb09ce2c3140e29f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75fcc23f391c8868f68811f9c973e82865bf0796d321465b03acf92c963f387c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fcc23f391c8868f68811f9c973e82865bf0796d321465b03acf92c963f387c->enter($__internal_75fcc23f391c8868f68811f9c973e82865bf0796d321465b03acf92c963f387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6dd1150745e833582ef309e1e4884712eb152b096d32144dc3704f23ffad998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dd1150745e833582ef309e1e4884712eb152b096d32144dc3704f23ffad998->enter($__internal_b6dd1150745e833582ef309e1e4884712eb152b096d32144dc3704f23ffad998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b6dd1150745e833582ef309e1e4884712eb152b096d32144dc3704f23ffad998->leave($__internal_b6dd1150745e833582ef309e1e4884712eb152b096d32144dc3704f23ffad998_prof);

        
        $__internal_75fcc23f391c8868f68811f9c973e82865bf0796d321465b03acf92c963f387c->leave($__internal_75fcc23f391c8868f68811f9c973e82865bf0796d321465b03acf92c963f387c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b432f13e9e7c6103d3dcef4ef79d7d40c8ea78f78bac428bd7faaf7a6f13dba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b432f13e9e7c6103d3dcef4ef79d7d40c8ea78f78bac428bd7faaf7a6f13dba0->enter($__internal_b432f13e9e7c6103d3dcef4ef79d7d40c8ea78f78bac428bd7faaf7a6f13dba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abb429241632a9205712b9fdc8afe8b028dc97c2bc7c29e42bf789d9c3bd7f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb429241632a9205712b9fdc8afe8b028dc97c2bc7c29e42bf789d9c3bd7f04->enter($__internal_abb429241632a9205712b9fdc8afe8b028dc97c2bc7c29e42bf789d9c3bd7f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_abb429241632a9205712b9fdc8afe8b028dc97c2bc7c29e42bf789d9c3bd7f04->leave($__internal_abb429241632a9205712b9fdc8afe8b028dc97c2bc7c29e42bf789d9c3bd7f04_prof);

        
        $__internal_b432f13e9e7c6103d3dcef4ef79d7d40c8ea78f78bac428bd7faaf7a6f13dba0->leave($__internal_b432f13e9e7c6103d3dcef4ef79d7d40c8ea78f78bac428bd7faaf7a6f13dba0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_74a77fef7efa87b0081abf3c20e1b4b80eff0e724a341a97be049a0d65c31383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a77fef7efa87b0081abf3c20e1b4b80eff0e724a341a97be049a0d65c31383->enter($__internal_74a77fef7efa87b0081abf3c20e1b4b80eff0e724a341a97be049a0d65c31383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbde4cdf18951a2e2de504f0b0b956e2ba8640a6ee86814a14738633d8a18c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbde4cdf18951a2e2de504f0b0b956e2ba8640a6ee86814a14738633d8a18c6e->enter($__internal_cbde4cdf18951a2e2de504f0b0b956e2ba8640a6ee86814a14738633d8a18c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbde4cdf18951a2e2de504f0b0b956e2ba8640a6ee86814a14738633d8a18c6e->leave($__internal_cbde4cdf18951a2e2de504f0b0b956e2ba8640a6ee86814a14738633d8a18c6e_prof);

        
        $__internal_74a77fef7efa87b0081abf3c20e1b4b80eff0e724a341a97be049a0d65c31383->leave($__internal_74a77fef7efa87b0081abf3c20e1b4b80eff0e724a341a97be049a0d65c31383_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
