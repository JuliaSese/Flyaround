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
        $__internal_79be5277a1a3237f4b210ef69e53738861a1ae9208efa9cad007d90ccb1e70ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79be5277a1a3237f4b210ef69e53738861a1ae9208efa9cad007d90ccb1e70ce->enter($__internal_79be5277a1a3237f4b210ef69e53738861a1ae9208efa9cad007d90ccb1e70ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_15997979615526895dc3cb0ace4730d3c3531dce68fec0f2f855e8fedba2c8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15997979615526895dc3cb0ace4730d3c3531dce68fec0f2f855e8fedba2c8be->enter($__internal_15997979615526895dc3cb0ace4730d3c3531dce68fec0f2f855e8fedba2c8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_79be5277a1a3237f4b210ef69e53738861a1ae9208efa9cad007d90ccb1e70ce->leave($__internal_79be5277a1a3237f4b210ef69e53738861a1ae9208efa9cad007d90ccb1e70ce_prof);

        
        $__internal_15997979615526895dc3cb0ace4730d3c3531dce68fec0f2f855e8fedba2c8be->leave($__internal_15997979615526895dc3cb0ace4730d3c3531dce68fec0f2f855e8fedba2c8be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_101e7619dd746d2b1e480f9c18497dbdeafc3d7b577edd0ad90cf88bd5b03bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101e7619dd746d2b1e480f9c18497dbdeafc3d7b577edd0ad90cf88bd5b03bfc->enter($__internal_101e7619dd746d2b1e480f9c18497dbdeafc3d7b577edd0ad90cf88bd5b03bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3f3c6fef6f4bb8548bb5c40114a1c8be287f9dbdb71d9786a698283836e02f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f3c6fef6f4bb8548bb5c40114a1c8be287f9dbdb71d9786a698283836e02f0->enter($__internal_b3f3c6fef6f4bb8548bb5c40114a1c8be287f9dbdb71d9786a698283836e02f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b3f3c6fef6f4bb8548bb5c40114a1c8be287f9dbdb71d9786a698283836e02f0->leave($__internal_b3f3c6fef6f4bb8548bb5c40114a1c8be287f9dbdb71d9786a698283836e02f0_prof);

        
        $__internal_101e7619dd746d2b1e480f9c18497dbdeafc3d7b577edd0ad90cf88bd5b03bfc->leave($__internal_101e7619dd746d2b1e480f9c18497dbdeafc3d7b577edd0ad90cf88bd5b03bfc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b54af3f79d9bbdc2e080d07db67ee9b1421195e0b31acc640e621d21dd4224e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b54af3f79d9bbdc2e080d07db67ee9b1421195e0b31acc640e621d21dd4224e->enter($__internal_8b54af3f79d9bbdc2e080d07db67ee9b1421195e0b31acc640e621d21dd4224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fac0689616170362dd4fa73cab626cebf9fbae894424ad00a0ad41160bc7cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fac0689616170362dd4fa73cab626cebf9fbae894424ad00a0ad41160bc7cbe->enter($__internal_4fac0689616170362dd4fa73cab626cebf9fbae894424ad00a0ad41160bc7cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4fac0689616170362dd4fa73cab626cebf9fbae894424ad00a0ad41160bc7cbe->leave($__internal_4fac0689616170362dd4fa73cab626cebf9fbae894424ad00a0ad41160bc7cbe_prof);

        
        $__internal_8b54af3f79d9bbdc2e080d07db67ee9b1421195e0b31acc640e621d21dd4224e->leave($__internal_8b54af3f79d9bbdc2e080d07db67ee9b1421195e0b31acc640e621d21dd4224e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f91f1308afc15440fcbdc0a8f44cc8847dbc177125abc3b94b03226ee6acc494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91f1308afc15440fcbdc0a8f44cc8847dbc177125abc3b94b03226ee6acc494->enter($__internal_f91f1308afc15440fcbdc0a8f44cc8847dbc177125abc3b94b03226ee6acc494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4349c19ceb598ee24d341fefa7a3765d66c4bc77969c2f238975a2baf03e6955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4349c19ceb598ee24d341fefa7a3765d66c4bc77969c2f238975a2baf03e6955->enter($__internal_4349c19ceb598ee24d341fefa7a3765d66c4bc77969c2f238975a2baf03e6955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4349c19ceb598ee24d341fefa7a3765d66c4bc77969c2f238975a2baf03e6955->leave($__internal_4349c19ceb598ee24d341fefa7a3765d66c4bc77969c2f238975a2baf03e6955_prof);

        
        $__internal_f91f1308afc15440fcbdc0a8f44cc8847dbc177125abc3b94b03226ee6acc494->leave($__internal_f91f1308afc15440fcbdc0a8f44cc8847dbc177125abc3b94b03226ee6acc494_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/flyaround_seb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
