<?php

/* user/index.html.twig */
class __TwigTemplate_b6173f43d8ddf05a8cdc74c72e8f1131dc0ad429a7697590f76a945276d86da2 extends Twig_Template
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
        $__internal_2ef9eeb32d37a356a156b1358755300948881e32276c5f2ea2fc824cbcbab220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef9eeb32d37a356a156b1358755300948881e32276c5f2ea2fc824cbcbab220->enter($__internal_2ef9eeb32d37a356a156b1358755300948881e32276c5f2ea2fc824cbcbab220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_7cb4471d86183bc639f7be1b693587116b95c3a94657f560d0b6454b1456a0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb4471d86183bc639f7be1b693587116b95c3a94657f560d0b6454b1456a0f9->enter($__internal_7cb4471d86183bc639f7be1b693587116b95c3a94657f560d0b6454b1456a0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef9eeb32d37a356a156b1358755300948881e32276c5f2ea2fc824cbcbab220->leave($__internal_2ef9eeb32d37a356a156b1358755300948881e32276c5f2ea2fc824cbcbab220_prof);

        
        $__internal_7cb4471d86183bc639f7be1b693587116b95c3a94657f560d0b6454b1456a0f9->leave($__internal_7cb4471d86183bc639f7be1b693587116b95c3a94657f560d0b6454b1456a0f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_482e031a01f64b94d6a8cddfe1612e83043b6b5eae623bfba998b923de2f53f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482e031a01f64b94d6a8cddfe1612e83043b6b5eae623bfba998b923de2f53f8->enter($__internal_482e031a01f64b94d6a8cddfe1612e83043b6b5eae623bfba998b923de2f53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af45e9a705a9c841815d97a2203a62283fd7420b075ba5fd70c20b14154e3c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af45e9a705a9c841815d97a2203a62283fd7420b075ba5fd70c20b14154e3c28->enter($__internal_af45e9a705a9c841815d97a2203a62283fd7420b075ba5fd70c20b14154e3c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Phonenumber</th>
                <th>Birthdate</th>
                <th>Creationdate</th>
                <th>Role</th>
                <th>Note</th>
                <th>Isacertifiedpilot</th>
                <th>Isactive</th>
                <th>Actions</th>
                <th>Reviews</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["user"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["user"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "role", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "note", array()), "html", null, true);
            echo "</td>
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "reviews", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 39
                echo "                    <td>";
                echo twig_escape_filter($this->env, $context["review"], "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                <td>";
            if ($this->getAttribute($context["user"], "isACertifiedPilot", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
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
        // line 55
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_af45e9a705a9c841815d97a2203a62283fd7420b075ba5fd70c20b14154e3c28->leave($__internal_af45e9a705a9c841815d97a2203a62283fd7420b075ba5fd70c20b14154e3c28_prof);

        
        $__internal_482e031a01f64b94d6a8cddfe1612e83043b6b5eae623bfba998b923de2f53f8->leave($__internal_482e031a01f64b94d6a8cddfe1612e83043b6b5eae623bfba998b923de2f53f8_prof);

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
        return array (  184 => 60,  177 => 55,  165 => 49,  159 => 46,  148 => 42,  139 => 41,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  112 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  80 => 28,  77 => 27,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
                <th>Phonenumber</th>
                <th>Birthdate</th>
                <th>Creationdate</th>
                <th>Role</th>
                <th>Note</th>
                <th>Isacertifiedpilot</th>
                <th>Isactive</th>
                <th>Actions</th>
                <th>Reviews</th>
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
                <td>{{ user.phoneNumber }}</td>
                <td>{% if user.birthDate %}{{ user.birthDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if user.creationDate %}{{ user.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ user.role }}</td>
                <td>{{ user.note }}</td>
                {% for review in user.reviews %}
                    <td>{{ review }}</td>
                {% endfor %}
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
", "user/index.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/user/index.html.twig");
    }
}
