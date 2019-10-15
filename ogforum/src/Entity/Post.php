<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;
    /**
     * @ORM\Column(type="datetime")
     */
    private $create_at;
    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="posts")
     */
    private $user_id;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="posts")
     */
    private $category_id;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reaction", mappedBy="post_id")
     */
    private $reactions;
    /**
     * @ORM\Column(type="boolean")
     */
    private $pinned;
    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled;
  
    public function __construct()
    {
        $this->reactions = new ArrayCollection();
        $this->category_id = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    public function getContent(): ?string
    {
        return $this->content;
    }
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->create_at;
    }
    public function setCreateAt(\DateTimeInterface $create_at): self
    {
        $this->create_at = $create_at;
        return $this;
    }
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }
    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    public function getUserId(): ?User
    {
        return $this->user_id;
    }
    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }
    /**
     * @return Collection|Category[]
     */
    public function getCategoryId(): Collection
    {
        return $this->category_id;
    }
    public function addCategoryId(Category $category): self
    {
        if (!$this->category_id->contains($category)) {
            $this->categories[] = $category;
            $category->setPostId($this);
        }
        return $this;
    }
    public function RemoveCategoryId(Category $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
            // set the owning side to null (unless already changed)
            if ($category->getPostId() === $this) {
                $category->setPostId(null);
            }
        }
        return $this;
    }
    /**
     * @return Collection|Reaction[]
     */
    public function getReactions(): Collection
    {
        return $this->reactions;
    }
    public function addReaction(Reaction $reaction): self
    {
        if (!$this->reactions->contains($reaction)) {
            $this->reactions[] = $reaction;
            $reaction->setPostId($this);
        }
        return $this;
    }
    public function removeReaction(Reaction $reaction): self
    {
        if ($this->reactions->contains($reaction)) {
            $this->reactions->removeElement($reaction);
            if ($reaction->getPostId() === $this) {
                $reaction->setPostId(null);
            }
        }
        return $this;
    }
    public function getPinned(): ?bool
    {
        return $this->pinned;
    }
    public function setPinned(bool $pinned): self
    {
        $this->pinned = $pinned;
        return $this;
    }
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
}
