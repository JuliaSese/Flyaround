<?php

/* user/index.html.twig */
class __TwigTemplate_058d1c90611b7d9b4b8125b1190fb19620eb2d6e955ac0c232e78ac9f7b5f9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4912d664a73b536dbcb9589e68f7a2b3e96e887dfc7b6fd7f098f4d1864674a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4912d664a73b536dbcb9589e68f7a2b3e96e887dfc7b6fd7f098f4d1864674a7->enter($__internal_4912d664a73b536dbcb9589e68f7a2b3e96e887dfc7b6fd7f098f4d1864674a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_cce8901ad05c90d54fde0de4ad0307e762e3886e2ab7638d82130e9dc62f3ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce8901ad05c90d54fde0de4ad0307e762e3886e2ab7638d82130e9dc62f3ec1->enter($__internal_cce8901ad05c90d54fde0de4ad0307e762e3886e2ab7638d82130e9dc62f3ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4912d664a73b536dbcb9589e68f7a2b3e96e887dfc7b6fd7f098f4d1864674a7->leave($__internal_4912d664a73b536dbcb9589e68f7a2b3e96e887dfc7b6fd7f098f4d1864674a7_prof);

        
        $__internal_cce8901ad05c90d54fde0de4ad0307e762e3886e2ab7638d82130e9dc62f3ec1->leave($__internal_cce8901ad05c90d54fde0de4ad0307e762e3886e2ab7638d82130e9dc62f3ec1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b28124caa4c002c32e02ba502760fe50a101872b9d8a2be4e5daa6e943f4685f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28124caa4c002c32e02ba502760fe50a101872b9d8a2be4e5daa6e943f4685f->enter($__internal_b28124caa4c002c32e02ba502760fe50a101872b9d8a2be4e5daa6e943f4685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f733f6ac7a86518dfd4c8a225fcf1e6fac7c1cdd389ade1dbc44f51448477e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f733f6ac7a86518dfd4c8a225fcf1e6fac7c1cdd389ade1dbc44f51448477e7->enter($__internal_8f733f6ac7a86518dfd4c8a225fcf1e6fac7c1cdd389ade1dbc44f51448477e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Creationdate</th>
                <th>Role</th>
                <th>Note</th>
                <th>Isacertifiedpilot</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "userName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "role", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "note", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "isACertifiedPilot", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 36
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_8f733f6ac7a86518dfd4c8a225fcf1e6fac7c1cdd389ade1dbc44f51448477e7->leave($__internal_8f733f6ac7a86518dfd4c8a225fcf1e6fac7c1cdd389ade1dbc44f51448477e7_prof);

        
        $__internal_b28124caa4c002c32e02ba502760fe50a101872b9d8a2be4e5daa6e943f4685f->leave($__internal_b28124caa4c002c32e02ba502760fe50a101872b9d8a2be4e5daa6e943f4685f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 54,  157 => 49,  145 => 43,  139 => 40,  128 => 36,  120 => 35,  116 => 34,  112 => 33,  106 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Creationdate</th>
                <th>Role</th>
                <th>Note</th>
                <th>Isacertifiedpilot</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.userName }}</td>
                <td>{{ user.firstName }}</td>
                <td>{{ user.lastName }}</td>
                <td>{{ user.email }}</td>
                <td>{% if user.birthDate %}{{ user.birthDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if user.creationDate %}{{ user.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ user.role }}</td>
                <td>{{ user.note }}</td>
                <td>{% if user.isACertifiedPilot %}Yes{% else %}No{% endif %}</td>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/var/www/html/flyaround/app/Resources/views/user/index.html.twig");
    }
}
