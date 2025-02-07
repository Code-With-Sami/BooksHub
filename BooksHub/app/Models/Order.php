use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'book_id', 'quantity', 'total_price', 'status', 'payment_status',
        'payment_method', 'tracking_number', 'shipping_address', 'order_notes'
    ];

    // Relationship: An order belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: An order belongs to a book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
