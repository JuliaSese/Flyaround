<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99575fce6baf03893eeb5bd1f54059034a3d660622a02d9282c216d6a45d45b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99575fce6baf03893eeb5bd1f54059034a3d660622a02d9282c216d6a45d45b3->enter($__internal_99575fce6baf03893eeb5bd1f54059034a3d660622a02d9282c216d6a45d45b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4204dfb9d2ba13180dfc93b5b70387640b315084b9098e75968c7a6aceba5b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4204dfb9d2ba13180dfc93b5b70387640b315084b9098e75968c7a6aceba5b52->enter($__internal_4204dfb9d2ba13180dfc93b5b70387640b315084b9098e75968c7a6aceba5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99575fce6baf03893eeb5bd1f54059034a3d660622a02d9282c216d6a45d45b3->leave($__internal_99575fce6baf03893eeb5bd1f54059034a3d660622a02d9282c216d6a45d45b3_prof);

        
        $__internal_4204dfb9d2ba13180dfc93b5b70387640b315084b9098e75968c7a6aceba5b52->leave($__internal_4204dfb9d2ba13180dfc93b5b70387640b315084b9098e75968c7a6aceba5b52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66b1ad93d5fe50953ed28f8f4943d5293a5aeeb3f1581dafc7f65c7740300ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b1ad93d5fe50953ed28f8f4943d5293a5aeeb3f1581dafc7f65c7740300ac8->enter($__internal_66b1ad93d5fe50953ed28f8f4943d5293a5aeeb3f1581dafc7f65c7740300ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47754fdebd22c945f2519a209b954e7091767fe2d19c7bc987e528b508956431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47754fdebd22c945f2519a209b954e7091767fe2d19c7bc987e528b508956431->enter($__internal_47754fdebd22c945f2519a209b954e7091767fe2d19c7bc987e528b508956431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_47754fdebd22c945f2519a209b954e7091767fe2d19c7bc987e528b508956431->leave($__internal_47754fdebd22c945f2519a209b954e7091767fe2d19c7bc987e528b508956431_prof);

        
        $__internal_66b1ad93d5fe50953ed28f8f4943d5293a5aeeb3f1581dafc7f65c7740300ac8->leave($__internal_66b1ad93d5fe50953ed28f8f4943d5293a5aeeb3f1581dafc7f65c7740300ac8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_def2de72e91959ea95f1ade6fd6c561a04fd1f7afe7be743650ed87e44ae419f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def2de72e91959ea95f1ade6fd6c561a04fd1f7afe7be743650ed87e44ae419f->enter($__internal_def2de72e91959ea95f1ade6fd6c561a04fd1f7afe7be743650ed87e44ae419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9df4fc8608b5e3e3d4cc56519cd75e88876e0bea5f340cc2d0b62c8fe2647900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df4fc8608b5e3e3d4cc56519cd75e88876e0bea5f340cc2d0b62c8fe2647900->enter($__internal_9df4fc8608b5e3e3d4cc56519cd75e88876e0bea5f340cc2d0b62c8fe2647900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9df4fc8608b5e3e3d4cc56519cd75e88876e0bea5f340cc2d0b62c8fe2647900->leave($__internal_9df4fc8608b5e3e3d4cc56519cd75e88876e0bea5f340cc2d0b62c8fe2647900_prof);

        
        $__internal_def2de72e91959ea95f1ade6fd6c561a04fd1f7afe7be743650ed87e44ae419f->leave($__internal_def2de72e91959ea95f1ade6fd6c561a04fd1f7afe7be743650ed87e44ae419f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0bf212616c0b5c68501123760372b2d534112468a27a293b33bc13aa1b8719a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bf212616c0b5c68501123760372b2d534112468a27a293b33bc13aa1b8719a->enter($__internal_e0bf212616c0b5c68501123760372b2d534112468a27a293b33bc13aa1b8719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c704c9d360eb42a7be4a08ab18d9d6e00a1f3760bb0615820e2661273af0b0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c704c9d360eb42a7be4a08ab18d9d6e00a1f3760bb0615820e2661273af0b0c8->enter($__internal_c704c9d360eb42a7be4a08ab18d9d6e00a1f3760bb0615820e2661273af0b0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c704c9d360eb42a7be4a08ab18d9d6e00a1f3760bb0615820e2661273af0b0c8->leave($__internal_c704c9d360eb42a7be4a08ab18d9d6e00a1f3760bb0615820e2661273af0b0c8_prof);

        
        $__internal_e0bf212616c0b5c68501123760372b2d534112468a27a293b33bc13aa1b8719a->leave($__internal_e0bf212616c0b5c68501123760372b2d534112468a27a293b33bc13aa1b8719a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
