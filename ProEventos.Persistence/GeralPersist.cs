using ProEventos.Persistence.Contratos;
using ProEventos.Persistense.Contextos;
using System.Threading.Tasks;

namespace ProEventos.Persistence
{
    public class GeralPersist : IGeralPersist
    {
        //CONSTRUTOR - INJEÇÃO DE DEPENDENCIA
        private readonly ProEventosContext _context;

        public GeralPersist(ProEventosContext context)
        {
            _context = context;
        }
        //
        public void Add<T>(T entity) where T : class
        {
            _context.Add(entity);
        }

        public void Update<T>(T entity) where T : class
        {
            _context.Update(entity);
        }

        public void Delete<T>(T entity) where T : class
        {
            _context.Remove(entity);
        }

        public void DeleteRange<T>(T[] entityArray) where T : class
        {
            _context.RemoveRange(entityArray);
        }

        //METODO BOOL (TIPO ASYNC RETORNA AWAIT) PRA SABER SE FOI FEITO ALGO (>0) RETORNA TRUE
        public async Task<bool> SaveChangesAsync()
        {
            return (await _context.SaveChangesAsync()) > 0;
        }

    }
}
