<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mail/inquiry.txt.twig */
class __TwigTemplate_d1695a9001bb3a8cc37f4a51693b07d6ed8952c2d3a77704c61100430343a1c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/inquiry.txt.twig"));

        // line 1
        echo "クラシックシンフォニー楽団webサイトから、お問い合わせがありました。

日時： ";
        // line 3
        echo twig_date_format_filter($this->env, "", "Y/m/d H:i");
        echo "
-------------------------------------------------------------
●お名前         ：";
        // line 5
        echo $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "name", []);
        echo "
●メールアドレス     ：";
        // line 6
        echo $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "email", []);
        echo "
●電話番号           ：";
        // line 7
        if (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "type", []) == 0)) {
            echo "公演について
";
        } else {
            // line 8
            echo "その他
";
        }
        // line 10
        echo "●お問い合わせ内容
";
        // line 11
        echo $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "content", []);
        echo "
-------------------------------------------------------------";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mail/inquiry.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  59 => 10,  55 => 8,  50 => 7,  46 => 6,  42 => 5,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("クラシックシンフォニー楽団webサイトから、お問い合わせがありました。

日時： {{ \"\"|date(\"Y/m/d H:i\") }}
-------------------------------------------------------------
●お名前         ：{{ data.name }}
●メールアドレス     ：{{ data.email }}
●電話番号           ：{% if data.type == 0 %}公演について
{% else %}その他
{% endif %}
●お問い合わせ内容
{{ data.content }}
-------------------------------------------------------------", "mail/inquiry.txt.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/mail/inquiry.txt.twig");
    }
}
