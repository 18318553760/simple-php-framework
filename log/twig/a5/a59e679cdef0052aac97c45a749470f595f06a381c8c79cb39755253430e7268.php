<?php

/* index.html */
class __TwigTemplate_f3eee9584f33f5c5e236e5ed167219f519921fb080860548595995ffcb7294e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 5
            echo "    <li>
        <div>
            <h1>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "title", array()), "html", null, true);
            echo "</h1>
            <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "content", array()), "html", null, true);
            echo "</p>
            <p><span>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</sapn></p>
            <a href=\"/index/del/id/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "id", array()), "html", null, true);
            echo "\">删除留言</a>
        </div>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}
<ul>
    {% for val in data %}
    <li>
        <div>
            <h1>{{ val.title }}</h1>
            <p>{{ val.content }}</p>
            <p><span>{{ val.created|date('Y-m-d H:i:s') }}</sapn></p>
            <a href=\"/index/del/id/{{ val.id }}\">删除留言</a>
        </div>
    </li>
    {% endfor %}
</ul>
{% endblock %}
", "index.html", "/home/luolingying/projects/imooc/app/views/index.html");
    }
}
