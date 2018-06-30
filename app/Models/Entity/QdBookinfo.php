<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 书籍信息

 * @Entity()
 * @Table(name="qd_bookinfo")
 * @uses      QdBookinfo
 */
class QdBookinfo extends Model
{
    /**
     * @var int $id 主键
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $bid 原网站书籍ID
     * @Column(name="bid", type="integer", default=0)
     */
    private $bid;

    /**
     * @var string $bookid 书籍id
     * @Column(name="bookid", type="string", length=100, default="")
     */
    private $bookid;

    /**
     * @var int $source 书籍来源ID
     * @Column(name="source", type="integer", default=0)
     */
    private $source;

    /**
     * @var string $name 书籍名称
     * @Column(name="name", type="char", length=250, default="")
     */
    private $name;

    /**
     * @var string $author 作者名称
     * @Column(name="author", type="char", length=250, default="")
     */
    private $author;

    /**
     * @var string $cover 封面地址
     * @Column(name="cover", type="char", length=250, default="")
     */
    private $cover;

    /**
     * @var int $readnum 阅读次数
     * @Column(name="readnum", type="integer", default=0)
     */
    private $readnum;

    /**
     * @var int $category 分类ID
     * @Column(name="category", type="integer", default=29)
     */
    private $category;

    /**
     * @var string $brief 简介
     * @Column(name="brief", type="text", length=65535)
     */
    private $brief;

    /**
     * @var int $finish 是否完结
     * @Column(name="finish", type="tinyint", default=0)
     */
    private $finish;

    /**
     * @var int $words 字数
     * @Column(name="words", type="integer")
     */
    private $words;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var int $updateTime 修改时间
     * @Column(name="update_time", type="bigint", default=0)
     */
    private $updateTime;

    /**
     * @var string $bookurl 书籍详情页地址
     * @Column(name="bookurl", type="string", length=255)
     */
    private $bookurl;

    /**
     * @var string $chapterurl 章节列表页地址
     * @Column(name="chapterurl", type="string", length=255)
     */
    private $chapterurl;

    /**
     * @var string $newestchaptertitle 最新章节标题
     * @Column(name="newestchaptertitle", type="string", length=300)
     */
    private $newestchaptertitle;

    /**
     * @var string $newestchapterurl 最新章节标题地址
     * @Column(name="newestchapterurl", type="string", length=300)
     */
    private $newestchapterurl;

    /**
     * @var int $visitnum 浏览次数
     * @Column(name="visitnum", type="integer", default=0)
     */
    private $visitnum;

    /**
     * @var int $recommendnum 推荐次数
     * @Column(name="recommendnum", type="integer", default=0)
     */
    private $recommendnum;

    /**
     * @var int $funsnum 粉丝人数
     * @Column(name="funsnum", type="integer", default=0)
     */
    private $funsnum;

    /**
     * @var int $commentnum 评论次数
     * @Column(name="commentnum", type="integer", default=0)
     */
    private $commentnum;

    /**
     * @var string $newestchapterupdatetime 最新章节标题地址更新时间
     * @Column(name="newestchapterupdatetime", type="string", length=300)
     */
    private $newestchapterupdatetime;

    /**
     * @var float $bookratingstarnum 书籍评分
     * @Column(name="bookratingstarnum", type="float", default=8)
     */
    private $bookratingstarnum;

    /**
     * @var int $auth 是否授权
     * @Column(name="auth", type="tinyint", default=0)
     */
    private $auth;

    /**
     * @var string $tags 书籍标签
     * @Column(name="tags", type="string", length=200, default="")
     */
    private $tags;

    /**
     * @var int $free 是否限免
     * @Column(name="free", type="tinyint", default=0)
     */
    private $free;

    /**
     * @var int $keyPoint 转折章节，用于微信公众号强制关注的跳转
     * @Column(name="key_point", type="integer", default=11)
     */
    private $keyPoint;

    /**
     * 主键
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 原网站书籍ID
     * @param int $value
     * @return $this
     */
    public function setBid(int $value): self
    {
        $this->bid = $value;

        return $this;
    }

    /**
     * 书籍id
     * @param string $value
     * @return $this
     */
    public function setBookid(string $value): self
    {
        $this->bookid = $value;

        return $this;
    }

    /**
     * 书籍来源ID
     * @param int $value
     * @return $this
     */
    public function setSource(int $value): self
    {
        $this->source = $value;

        return $this;
    }

    /**
     * 书籍名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 作者名称
     * @param string $value
     * @return $this
     */
    public function setAuthor(string $value): self
    {
        $this->author = $value;

        return $this;
    }

    /**
     * 封面地址
     * @param string $value
     * @return $this
     */
    public function setCover(string $value): self
    {
        $this->cover = $value;

        return $this;
    }

    /**
     * 阅读次数
     * @param int $value
     * @return $this
     */
    public function setReadnum(int $value): self
    {
        $this->readnum = $value;

        return $this;
    }

    /**
     * 分类ID
     * @param int $value
     * @return $this
     */
    public function setCategory(int $value): self
    {
        $this->category = $value;

        return $this;
    }

    /**
     * 简介
     * @param string $value
     * @return $this
     */
    public function setBrief(string $value): self
    {
        $this->brief = $value;

        return $this;
    }

    /**
     * 是否完结
     * @param int $value
     * @return $this
     */
    public function setFinish(int $value): self
    {
        $this->finish = $value;

        return $this;
    }

    /**
     * 字数
     * @param int $value
     * @return $this
     */
    public function setWords(int $value): self
    {
        $this->words = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 修改时间
     * @param int $value
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->updateTime = $value;

        return $this;
    }

    /**
     * 书籍详情页地址
     * @param string $value
     * @return $this
     */
    public function setBookurl(string $value): self
    {
        $this->bookurl = $value;

        return $this;
    }

    /**
     * 章节列表页地址
     * @param string $value
     * @return $this
     */
    public function setChapterurl(string $value): self
    {
        $this->chapterurl = $value;

        return $this;
    }

    /**
     * 最新章节标题
     * @param string $value
     * @return $this
     */
    public function setNewestchaptertitle(string $value): self
    {
        $this->newestchaptertitle = $value;

        return $this;
    }

    /**
     * 最新章节标题地址
     * @param string $value
     * @return $this
     */
    public function setNewestchapterurl(string $value): self
    {
        $this->newestchapterurl = $value;

        return $this;
    }

    /**
     * 浏览次数
     * @param int $value
     * @return $this
     */
    public function setVisitnum(int $value): self
    {
        $this->visitnum = $value;

        return $this;
    }

    /**
     * 推荐次数
     * @param int $value
     * @return $this
     */
    public function setRecommendnum(int $value): self
    {
        $this->recommendnum = $value;

        return $this;
    }

    /**
     * 粉丝人数
     * @param int $value
     * @return $this
     */
    public function setFunsnum(int $value): self
    {
        $this->funsnum = $value;

        return $this;
    }

    /**
     * 评论次数
     * @param int $value
     * @return $this
     */
    public function setCommentnum(int $value): self
    {
        $this->commentnum = $value;

        return $this;
    }

    /**
     * 最新章节标题地址更新时间
     * @param string $value
     * @return $this
     */
    public function setNewestchapterupdatetime(string $value): self
    {
        $this->newestchapterupdatetime = $value;

        return $this;
    }

    /**
     * 书籍评分
     * @param float $value
     * @return $this
     */
    public function setBookratingstarnum(float $value): self
    {
        $this->bookratingstarnum = $value;

        return $this;
    }

    /**
     * 是否授权
     * @param int $value
     * @return $this
     */
    public function setAuth(int $value): self
    {
        $this->auth = $value;

        return $this;
    }

    /**
     * 书籍标签
     * @param string $value
     * @return $this
     */
    public function setTags(string $value): self
    {
        $this->tags = $value;

        return $this;
    }

    /**
     * 是否限免
     * @param int $value
     * @return $this
     */
    public function setFree(int $value): self
    {
        $this->free = $value;

        return $this;
    }

    /**
     * 转折章节，用于微信公众号强制关注的跳转
     * @param int $value
     * @return $this
     */
    public function setKeyPoint(int $value): self
    {
        $this->keyPoint = $value;

        return $this;
    }

    /**
     * 主键
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 原网站书籍ID
     * @return int
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * 书籍id
     * @return string
     */
    public function getBookid()
    {
        return $this->bookid;
    }

    /**
     * 书籍来源ID
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 书籍名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 作者名称
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * 封面地址
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * 阅读次数
     * @return int
     */
    public function getReadnum()
    {
        return $this->readnum;
    }

    /**
     * 分类ID
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * 简介
     * @return string
     */
    public function getBrief()
    {
        return $this->brief;
    }

    /**
     * 是否完结
     * @return int
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * 字数
     * @return int
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 修改时间
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * 书籍详情页地址
     * @return string
     */
    public function getBookurl()
    {
        return $this->bookurl;
    }

    /**
     * 章节列表页地址
     * @return string
     */
    public function getChapterurl()
    {
        return $this->chapterurl;
    }

    /**
     * 最新章节标题
     * @return string
     */
    public function getNewestchaptertitle()
    {
        return $this->newestchaptertitle;
    }

    /**
     * 最新章节标题地址
     * @return string
     */
    public function getNewestchapterurl()
    {
        return $this->newestchapterurl;
    }

    /**
     * 浏览次数
     * @return int
     */
    public function getVisitnum()
    {
        return $this->visitnum;
    }

    /**
     * 推荐次数
     * @return int
     */
    public function getRecommendnum()
    {
        return $this->recommendnum;
    }

    /**
     * 粉丝人数
     * @return int
     */
    public function getFunsnum()
    {
        return $this->funsnum;
    }

    /**
     * 评论次数
     * @return int
     */
    public function getCommentnum()
    {
        return $this->commentnum;
    }

    /**
     * 最新章节标题地址更新时间
     * @return string
     */
    public function getNewestchapterupdatetime()
    {
        return $this->newestchapterupdatetime;
    }

    /**
     * 书籍评分
     * @return mixed
     */
    public function getBookratingstarnum()
    {
        return $this->bookratingstarnum;
    }

    /**
     * 是否授权
     * @return int
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * 书籍标签
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * 是否限免
     * @return int
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * 转折章节，用于微信公众号强制关注的跳转
     * @return mixed
     */
    public function getKeyPoint()
    {
        return $this->keyPoint;
    }

}
