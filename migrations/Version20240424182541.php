<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240424182541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reason (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE speciality_reason (speciality_id INT NOT NULL, reason_id INT NOT NULL, INDEX IDX_ACB8F5CE3B5A08D7 (speciality_id), INDEX IDX_ACB8F5CE59BB1592 (reason_id), PRIMARY KEY(speciality_id, reason_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE speciality_reason ADD CONSTRAINT FK_ACB8F5CE3B5A08D7 FOREIGN KEY (speciality_id) REFERENCES speciality (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE speciality_reason ADD CONSTRAINT FK_ACB8F5CE59BB1592 FOREIGN KEY (reason_id) REFERENCES reason (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE speciality_reason DROP FOREIGN KEY FK_ACB8F5CE3B5A08D7');
        $this->addSql('ALTER TABLE speciality_reason DROP FOREIGN KEY FK_ACB8F5CE59BB1592');
        $this->addSql('DROP TABLE reason');
        $this->addSql('DROP TABLE speciality_reason');
    }
}
