<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
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
        $__internal_e2ef9c37660c638dafa22ddd8d7905d49854c7520629f2552d791905d56ea2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ef9c37660c638dafa22ddd8d7905d49854c7520629f2552d791905d56ea2e0->enter($__internal_e2ef9c37660c638dafa22ddd8d7905d49854c7520629f2552d791905d56ea2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_23ee3e6f52b31aad2828833d8e750907ecc90004c3992d91e74f25c8095df231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ee3e6f52b31aad2828833d8e750907ecc90004c3992d91e74f25c8095df231->enter($__internal_23ee3e6f52b31aad2828833d8e750907ecc90004c3992d91e74f25c8095df231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e2ef9c37660c638dafa22ddd8d7905d49854c7520629f2552d791905d56ea2e0->leave($__internal_e2ef9c37660c638dafa22ddd8d7905d49854c7520629f2552d791905d56ea2e0_prof);

        
        $__internal_23ee3e6f52b31aad2828833d8e750907ecc90004c3992d91e74f25c8095df231->leave($__internal_23ee3e6f52b31aad2828833d8e750907ecc90004c3992d91e74f25c8095df231_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb6500bc0b51e95ba7f447bb18ae3e35991161fcf3935b478abba438c69b6820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6500bc0b51e95ba7f447bb18ae3e35991161fcf3935b478abba438c69b6820->enter($__internal_fb6500bc0b51e95ba7f447bb18ae3e35991161fcf3935b478abba438c69b6820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97d3f9b85868cf5bb50554f2389c31e6d0c9d4d1c91c7ab8215243210a4a67cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d3f9b85868cf5bb50554f2389c31e6d0c9d4d1c91c7ab8215243210a4a67cf->enter($__internal_97d3f9b85868cf5bb50554f2389c31e6d0c9d4d1c91c7ab8215243210a4a67cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_97d3f9b85868cf5bb50554f2389c31e6d0c9d4d1c91c7ab8215243210a4a67cf->leave($__internal_97d3f9b85868cf5bb50554f2389c31e6d0c9d4d1c91c7ab8215243210a4a67cf_prof);

        
        $__internal_fb6500bc0b51e95ba7f447bb18ae3e35991161fcf3935b478abba438c69b6820->leave($__internal_fb6500bc0b51e95ba7f447bb18ae3e35991161fcf3935b478abba438c69b6820_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_55bff2991f712f1ce16e9536129a68d775450832057da021cfdb245e7fb563a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bff2991f712f1ce16e9536129a68d775450832057da021cfdb245e7fb563a4->enter($__internal_55bff2991f712f1ce16e9536129a68d775450832057da021cfdb245e7fb563a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54352b87438a98edbbef1f456bb345980905901ccbd306180bcc50135fa562af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54352b87438a98edbbef1f456bb345980905901ccbd306180bcc50135fa562af->enter($__internal_54352b87438a98edbbef1f456bb345980905901ccbd306180bcc50135fa562af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_54352b87438a98edbbef1f456bb345980905901ccbd306180bcc50135fa562af->leave($__internal_54352b87438a98edbbef1f456bb345980905901ccbd306180bcc50135fa562af_prof);

        
        $__internal_55bff2991f712f1ce16e9536129a68d775450832057da021cfdb245e7fb563a4->leave($__internal_55bff2991f712f1ce16e9536129a68d775450832057da021cfdb245e7fb563a4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1f36f0daec6807615e37651251fc441503b0c54eb10ed69f02d3c0d932ea679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f36f0daec6807615e37651251fc441503b0c54eb10ed69f02d3c0d932ea679->enter($__internal_c1f36f0daec6807615e37651251fc441503b0c54eb10ed69f02d3c0d932ea679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9111c78274163c0345fe36eb1ba31207031cc834f7e18918924b93973198fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9111c78274163c0345fe36eb1ba31207031cc834f7e18918924b93973198fe2->enter($__internal_e9111c78274163c0345fe36eb1ba31207031cc834f7e18918924b93973198fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9111c78274163c0345fe36eb1ba31207031cc834f7e18918924b93973198fe2->leave($__internal_e9111c78274163c0345fe36eb1ba31207031cc834f7e18918924b93973198fe2_prof);

        
        $__internal_c1f36f0daec6807615e37651251fc441503b0c54eb10ed69f02d3c0d932ea679->leave($__internal_c1f36f0daec6807615e37651251fc441503b0c54eb10ed69f02d3c0d932ea679_prof);

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
