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
        $__internal_577384357290e12b2fe81a2de1134fa970fbed302439ba48849c1ee182766f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577384357290e12b2fe81a2de1134fa970fbed302439ba48849c1ee182766f00->enter($__internal_577384357290e12b2fe81a2de1134fa970fbed302439ba48849c1ee182766f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3c847a2af828d28bdfc260f07564e34ff7b3e4dad6293ad02f0f2a83a02b0612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c847a2af828d28bdfc260f07564e34ff7b3e4dad6293ad02f0f2a83a02b0612->enter($__internal_3c847a2af828d28bdfc260f07564e34ff7b3e4dad6293ad02f0f2a83a02b0612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_577384357290e12b2fe81a2de1134fa970fbed302439ba48849c1ee182766f00->leave($__internal_577384357290e12b2fe81a2de1134fa970fbed302439ba48849c1ee182766f00_prof);

        
        $__internal_3c847a2af828d28bdfc260f07564e34ff7b3e4dad6293ad02f0f2a83a02b0612->leave($__internal_3c847a2af828d28bdfc260f07564e34ff7b3e4dad6293ad02f0f2a83a02b0612_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_364ad2d80b8f8361dc5965bd96d2f10be3533b94afe7a29a3f8dbc24cc770986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364ad2d80b8f8361dc5965bd96d2f10be3533b94afe7a29a3f8dbc24cc770986->enter($__internal_364ad2d80b8f8361dc5965bd96d2f10be3533b94afe7a29a3f8dbc24cc770986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88cbe54ecb21edd3d2f417199f867aac7b0359db5b4fa26c55acce52a364d086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cbe54ecb21edd3d2f417199f867aac7b0359db5b4fa26c55acce52a364d086->enter($__internal_88cbe54ecb21edd3d2f417199f867aac7b0359db5b4fa26c55acce52a364d086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_88cbe54ecb21edd3d2f417199f867aac7b0359db5b4fa26c55acce52a364d086->leave($__internal_88cbe54ecb21edd3d2f417199f867aac7b0359db5b4fa26c55acce52a364d086_prof);

        
        $__internal_364ad2d80b8f8361dc5965bd96d2f10be3533b94afe7a29a3f8dbc24cc770986->leave($__internal_364ad2d80b8f8361dc5965bd96d2f10be3533b94afe7a29a3f8dbc24cc770986_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6e1f989374aec0b7ef495c05e82e2ec8da81d362d1f78cb9f0615f5b31a413e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e1f989374aec0b7ef495c05e82e2ec8da81d362d1f78cb9f0615f5b31a413e->enter($__internal_e6e1f989374aec0b7ef495c05e82e2ec8da81d362d1f78cb9f0615f5b31a413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f39216b824a16900ac96ddba7f16918705518b7d22fd9b736e05d85caba177cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39216b824a16900ac96ddba7f16918705518b7d22fd9b736e05d85caba177cd->enter($__internal_f39216b824a16900ac96ddba7f16918705518b7d22fd9b736e05d85caba177cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f39216b824a16900ac96ddba7f16918705518b7d22fd9b736e05d85caba177cd->leave($__internal_f39216b824a16900ac96ddba7f16918705518b7d22fd9b736e05d85caba177cd_prof);

        
        $__internal_e6e1f989374aec0b7ef495c05e82e2ec8da81d362d1f78cb9f0615f5b31a413e->leave($__internal_e6e1f989374aec0b7ef495c05e82e2ec8da81d362d1f78cb9f0615f5b31a413e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e963d6cbdb0dd2ef216bf78458c60569c83a7202cb79b125cca78fc68c0757f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e963d6cbdb0dd2ef216bf78458c60569c83a7202cb79b125cca78fc68c0757f->enter($__internal_2e963d6cbdb0dd2ef216bf78458c60569c83a7202cb79b125cca78fc68c0757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6af4263b995e6d9440ed08dbb7dfea047c37f137d13ca21f6f1435e447cfbd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af4263b995e6d9440ed08dbb7dfea047c37f137d13ca21f6f1435e447cfbd59->enter($__internal_6af4263b995e6d9440ed08dbb7dfea047c37f137d13ca21f6f1435e447cfbd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6af4263b995e6d9440ed08dbb7dfea047c37f137d13ca21f6f1435e447cfbd59->leave($__internal_6af4263b995e6d9440ed08dbb7dfea047c37f137d13ca21f6f1435e447cfbd59_prof);

        
        $__internal_2e963d6cbdb0dd2ef216bf78458c60569c83a7202cb79b125cca78fc68c0757f->leave($__internal_2e963d6cbdb0dd2ef216bf78458c60569c83a7202cb79b125cca78fc68c0757f_prof);

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
