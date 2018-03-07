<?php

/* add.html */
class __TwigTemplate_b511f911e143fa76efc6bc0688a8997fa63bfec309dcf1d5e7f7bb6c83fc9206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
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
        echo "<form action=\"/index/save\" method=\"POST\">
    <fieldset>
        <legend>添加留言</legend>
        <div class=\"\">
            <input type=\"text\" name=\"title\" placeholder=\"请输入title\">
        </div>
        <br/>
        <div class=\"\">
            <textarea name=\"content\" rows=\"8\" cols=\"80\" placeholder=\"请输入content\"></textarea>
        </div>
        <p><button type=\"submit\">提交</button></p>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}
<form action=\"/index/save\" method=\"POST\">
    <fieldset>
        <legend>添加留言</legend>
        <div class=\"\">
            <input type=\"text\" name=\"title\" placeholder=\"请输入title\">
        </div>
        <br/>
        <div class=\"\">
            <textarea name=\"content\" rows=\"8\" cols=\"80\" placeholder=\"请输入content\"></textarea>
        </div>
        <p><button type=\"submit\">提交</button></p>
    </fieldset>
</form>
{% endblock %}
", "add.html", "/home/luolingying/projects/imooc/app/views/add.html");
    }
}
