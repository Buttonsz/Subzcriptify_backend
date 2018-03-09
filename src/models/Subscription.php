<?php
/**
 * @Entity @Table(name="subscriptions")
 */
class Subscription {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     */
    protected $id;

    /**
     * @OneToMany(targetEntity="Category", mappedBy="id")
     * @var Category
     */
    protected $category = null;

    /**
     * @OneToMany(targetEntity="Type", mappedBy="id")
     * @var Type
     */
    protected $type = null;

    /**
     * @Column(type="string")
     */
    protected $name;

    /**
     * @Column(type="string")
     */
    protected $iconUrl;

    /**
     * @Column(type="string")
     */
    protected $colorHex;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getIconUrl() {
        return $this->iconUrl;
    }

    public function setIconUrl(string $iconUrl) {
        $this->iconUrl = $iconUrl;
    }

    public function getColorHex() {
        return $this->colorHex;
    }

    public function setColorHex(string $hexColor) {
        $this->colorHex = $hexColor;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category $category) {
        $this->category = $category;
    }

    public function getType() {
        return $this->type;
    }

    public function setType(Type $type) {
        $this->type = $type;
    }

    public function __construct(string $name, string $iconUrl, string $hexColor) {
        $this->name = $name;
        $this->iconUrl = $iconUrl;
        $this->colorHex = $hexColor;
    }
}
